<?php


namespace Healsdata\MastodonApi\DocsToSchema\Generator;


use League\CLImate\CLImate;
use ReflectionClass;

class SchemaGenerator implements GeneratorInterface
{
    private CLImate $cli;

    /**
     * @var array|GeneratorInterface[]
     */
    private array $generators = [];

    public function __construct(CLImate $cli)
    {
        $this->cli = $cli;
        $this->generators[] = new EntityGenerator($cli);
    }

    public function run(string $documentationRepo, string $targetDirectory): void
    {
        $this->cli->shout("Beginning " . $this->getShortName($this) .  " run for " . $documentationRepo);

        foreach ($this->generators as $generator) {
            $this->cli->info("Running " . $this->getShortName($generator));
            $generator->run($documentationRepo, $targetDirectory);
        }
    }

    private function getShortName(object $obj)
    {
        return (new ReflectionClass($obj))->getShortName();
    }
}