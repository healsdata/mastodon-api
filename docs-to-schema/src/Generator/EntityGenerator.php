<?php


namespace Healsdata\MastodonApi\DocsToSchema\Generator;


use DirectoryIterator;
use Healsdata\MastodonApi\DocsToSchema\Builder\ClassBuilder;
use Healsdata\MastodonApi\DocsToSchema\Builder\PropertyBuilder;
use League\CLImate\CLImate;

class EntityGenerator implements GeneratorInterface
{
    private CLImate $cli;

    public function __construct(CLImate $cli)
    {
        $this->cli = $cli;
    }

    public function run(string $documentationRepo, string $targetDirectory): void
    {
        $docRepoFullPath = $documentationRepo . "/content/en/entities";

        foreach (new DirectoryIterator($docRepoFullPath) as $fileInfo) {
            if ($fileInfo->isDot()) {
                continue;
            }

            $subNamespace = "Entity";
            $entityName = $fileInfo->getBasename(".md");

            if (stristr($entityName, "_") !== false) {
                $pieces = explode("_", $entityName);
                $subNamespace .= "\\" . $pieces[0];
                $entityName = $pieces[1];
            }

            $entityBuilder = new ClassBuilder($entityName);
            $entityBuilder->subNamespace = $subNamespace;

            $file = file_get_contents($fileInfo->getPathname());
            $entityBuilder->description = trim($this->getMatches("/^description:\s(.*)$/m", $file)[1][0]) ?? "";

            $attributeRegex = <<<EOF
/\#\#\# `(?<name>.*)` (?<optional>{{%optional%}} ){0,1}\{\#.*\}

\*\*Description:\*\* (?<description>.*)\\\\
\*\*Type:\*\* (?<type>.*)\\\\
/m
EOF;

            $attributeMatches = $this->getMatches($attributeRegex, $file);


            foreach ($attributeMatches[0] as $key => $fullMatch) {
                $propertyBuilder = new PropertyBuilder(
                    $attributeMatches['name'][$key],
                    $attributeMatches['type'][$key],
                    $attributeMatches['description'][$key]
                );
                $entityBuilder->properties[] = $propertyBuilder;
            }

            $entityFilePath = $entityBuilder->getFilePath($targetDirectory);
            $entityDirName = dirname($entityFilePath);

            if (!is_dir($entityDirName)) {
                mkdir($entityDirName, "0777", true);
            }

            file_put_contents($entityFilePath, $entityBuilder->getCode());
        }
    }

    private function getMatches(string $pattern, string $subject)
    {
        $matches = [];

        $result = preg_match_all($pattern, $subject, $matches);

        if ($result === false) {
            throw new \RuntimeException(preg_last_error());
        }

        return $matches;
    }
}