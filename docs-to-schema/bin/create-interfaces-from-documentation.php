<?php

use DI\Container;
use Healsdata\MastodonApi\DocsToSchema\Generator\SchemaGenerator;

chdir(dirname(__DIR__, 2));

require 'vendor/autoload.php';

$documentationRepo = "docs-to-schema/data/documentation";
$targetDirectory = "src/Schema";

$container = new Container();
$schemaGenerator = $container->get(SchemaGenerator::class);
$schemaGenerator->run($documentationRepo, $targetDirectory);


