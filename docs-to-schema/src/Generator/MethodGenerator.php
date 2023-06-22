<?php


namespace Healsdata\MastodonApi\DocsToSchema\Generator;


use DirectoryIterator;
use Healsdata\MastodonApi\DocsToSchema\Builder\ClassBuilder;
use Healsdata\MastodonApi\DocsToSchema\Builder\PropertyBuilder;
use League\CLImate\CLImate;

class MethodGenerator implements GeneratorInterface
{
    private CLImate $cli;

    public function __construct(CLImate $cli)
    {
        $this->cli = $cli;
    }

    public function run(string $documentationRepo, string $targetDirectory): void
    {
        $docRepoFullPath = $documentationRepo . "/content/en/methods";

        $this->runForDirectory($docRepoFullPath, $targetDirectory, "Method");
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

    /**
     * @param string $docRepoFullPath
     * @param string $targetDirectory
     * @return void
     */
    protected function runForDirectory(string $docRepoFullPath, string $targetDirectory, string $subNamespace): void
    {
        print_r(func_get_args());

        foreach (new DirectoryIterator($docRepoFullPath) as $fileInfo) {
            if ($fileInfo->isDot()) {
                continue;
            }

            if ($fileInfo->isDir()) {
                $fileNamespace = ucfirst($fileInfo->getBasename());

                $this->runForDirectory(
                    $docRepoFullPath . DIRECTORY_SEPARATOR . $fileInfo->getBasename(),
                    $targetDirectory,
                    $subNamespace . "\\" . $fileNamespace
                );

                continue;
            }

            $entityName = $fileInfo->getBasename(".md");

            $entityNamePieces = explode("_", $entityName);
            $entityNamePieces = array_map('ucfirst', $entityNamePieces);
            $entityName = join("", $entityNamePieces);

            $entityName = rtrim( $entityName, "s");
            $entityName = str_replace("Statuse", "Status", $entityName);

            $entityBuilder = new ClassBuilder($entityName, "interface");
            $entityBuilder->subNamespace = $subNamespace;

            $file = file_get_contents($fileInfo->getPathname());

            print $fileInfo->getFilename() . PHP_EOL;

            $entityBuilder->description = trim($this->getMatches("/^description:\s((.*\n)*)menu:/m", $file)[1][0]) ?? "";
            /*
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
            */
            $entityFilePath = $entityBuilder->getFilePath($targetDirectory);
            $entityDirName = dirname($entityFilePath);

            if (!is_dir($entityDirName)) {
                mkdir($entityDirName, "0777", true);
            }

            file_put_contents($entityFilePath, $entityBuilder->getCode());
        }
    }
}