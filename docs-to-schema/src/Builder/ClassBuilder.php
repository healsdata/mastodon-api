<?php


namespace Healsdata\MastodonApi\DocsToSchema\Builder;


class ClassBuilder implements BuilderInterface
{
    public string $name;

    public string $subNamespace = "";

    public string $description = "";

    /** @var array|PropertyBuilder[] */
    public array $properties = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getNamespace()
    {
        $namespace = 'Healsdata\MastodonApi\Schema\Entity';
        if (!empty($this->subNamespace)) {
            $namespace .= '\\' . $this->subNamespace;
        }
        return $namespace;
    }

    public function getFilePath(string $targetDirectory)
    {
        if (!empty($this->subNamespace)) {
            $targetDirectory .= DIRECTORY_SEPARATOR . $this->subNamespace;
        }

        return $targetDirectory . DIRECTORY_SEPARATOR . $this->name . ".php";
    }

    public function getCode(): string
    {
        $output = <<<EOF
<?php

namespace {$this->getNamespace()};

/**
 * {$this->description}
 */
class {$this->name}
{ 
EOF;
        foreach ($this->properties as $property) {
            $output .= $property->getCode();
        }


        $output .= PHP_EOL . "}" . PHP_EOL;

        return $output;
    }
}