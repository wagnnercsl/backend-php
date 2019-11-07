<?php

require_once __DIR__ . '/vendor/autoload.php';

use Moovin\Job\Backend;

$deposito = new Backend\Deposito;

if ($argc != 3) {
    echo "Utilize: php deposito.php [destino] [valor].\n";
    exit(1);
}
$destino = $argv[1];
$valor = $argv[2];

if($destino <=0){
	echo "O numero da conta de destino deve ser maior que 0!";
	exit(1);
}

if($valor <=0){
	echo "O valor do deposito deve ser maior que 0!";
	exit(1);
}

echo $deposito->depositar($destino,$valor);