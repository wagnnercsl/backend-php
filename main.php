<?php

require_once __DIR__ . '/vendor/autoload.php';

use Moovin\Job\Backend;

$exemplo = new Backend\Exemplo;

if ($argc != 2) {
    echo "Usage: php hello.php [name].\n";
    exit(1);
}
$name = $argv[1];

echo $exemplo->exemplo($name);