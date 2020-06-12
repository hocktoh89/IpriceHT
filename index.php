#!/usr/bin/php
<?php

require __DIR__ . '/vendor/autoload.php';
use IpriceHT\App;

if (php_sapi_name() !== 'cli') {
    exit;
}

function readInput() {
    $fr = fopen("php://stdin","r");
    $input = fgets($fr,128);
    $input = rtrim($input);
    fclose ($fr);
    return $input;
}

echo "Please key in a string: " . PHP_EOL;

$name = readInput();

$app = new App();
$app->runCommand($name);
?>