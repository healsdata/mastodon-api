<?php


namespace Healsdata\MastodonApi\DocsToSchema\Generator;


interface GeneratorInterface
{
    public function run(string $documentationRepo, string $targetDirectory): void;
}