<?php

require_once __DIR__.'/vendor/autoload.php';
Ladybug\Loader::loadHelpers();

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

try {
    $value = Yaml::parse(file_get_contents('app/config.yml'));
} catch (ParseException $e) {
    printf("Unable to parse the YAML string: %s", $e->getMessage());
}

ld($value);
