<?php


namespace Healsdata\MastodonApi\DocsToSchema\Builder;


class PropertyBuilder implements BuilderInterface
{
    private string $name;
    private string $type;
    private string $description = "";

    private string|null $phpType = null;
    private string|null $typeComment = null;
    private bool $isNullable = false;
    private string|null $docType = null;

    public function __construct(string $name, string $type, string $description = "")
    {
        $this->name = $this->getCamelCaseFromSnakeCase($name);
        $this->type = $type;
        $this->description = $description;
    }

    private function calcPHPType()
    {
        if (!empty($this->phpType)) {
            return;
        }

        $type = $this->type;
        $this->isNullable = false;
        if (strpos($this->type, "{{<nullable>}}") === 0) {
            $this->isNullable = true;
            $type = substr($this->type, strlen("{{<nullable>}}") + 1);
        }
        if (strpos($this->type, "{{<optional>}}") === 0) {
            $this->isNullable = true;
            $type = substr($this->type, strlen("{{<optional>}}") + 1);
        }

        $type = trim($type);

        switch (true) {
            case strpos($type, "Boolean") === 0:
                $this->phpType = "bool";
                $this->typeComment = $this->ltrimString("Boolean", $this->type);
                break;
            case strpos($type, "String") === 0:
                $this->phpType = "string";
                $this->typeComment = $this->ltrimString("String", $this->type);
                break;
            case strpos($type, "Null") === 0:
                $this->phpType = "null";
                $this->typeComment = $this->ltrimString("Null", $this->type);
                break;
            case strpos($type, "Integer") === 0:
                $this->phpType = "int";
                $this->typeComment = $this->ltrimString("Integer", $this->type);
                break;
            case strpos($type, "Number") === 0:
                $this->phpType = "int";
                $this->typeComment = $this->ltrimString("Number", $this->type);
                break;
            case strpos($type, "Array") === 0:
                $this->phpType = "array";
                $this->typeComment = $this->ltrimString("Array", $this->type);

                $docType = $this->ltrimString("Array of [", $this->type);
                $this->docType = substr($docType, 0, stripos($docType, "]")) . "[]";

                break;
            case $type == "Hash":
                $this->phpType = "array";
                $this->typeComment = $this->ltrimString("Hash", $this->type);
                break;
            // @todo These are links to other classes we'll be generating as well.
            case strpos($type, "relref") !== false:
                $this->phpType = substr($type, 1, stripos($type, "]") - 1);
                $this->typeComment = $this->type;
                break;
            case strpos($type, "[Status]") !== false:
                $this->phpType = "Status";
                $this->typeComment = $this->type;
                break;
            case strpos($type, "Account") !== false:
                $this->phpType = "Account";
                $this->typeComment = $this->type;
                break;
            default:
                throw new \InvalidArgumentException(
                    "Unable to convert to PHP Type: " . $this->type . " for {$this->name}"
                );
        }

        if (empty($this->docType)) {
            $this->docType = $this->phpType;
        }
    }

    private function getCamelCaseFromSnakeCase(string $string): string
    {
        $pieces = explode("_", $string);
        $pieces = array_map('ucfirst', $pieces);
        $pieces[0] = lcfirst($pieces[0]);
        return join("", $pieces);
    }

    private function ltrimString(string $removePrefix, string $fullString): string
    {
        $returnString = trim($fullString);

        if (stripos($returnString, $removePrefix) === 0) {
            $returnString = substr($returnString, strlen($removePrefix));
            $returnString = trim($returnString);
        }

        return $returnString;
    }

    public function getCode(): string
    {
        $this->calcPHPType();

        $additionalType = "";
        $defaultValue = "";
        if ($this->isNullable) {
            $additionalType = "|null";
            $defaultValue = " = null";
        }

        return <<<EOF

    /**
     * {$this->description}
     * 
     * @param {$this->docType}{$additionalType} \${$this->name} {$this->typeComment}
     */
    protected {$this->phpType}{$additionalType} \${$this->name}{$defaultValue};
    
EOF;
    }
}