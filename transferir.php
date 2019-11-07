<?php

require_once __DIR__ . '/vendor/autoload.php';

use Moovin\Job\Backend;

$transferencia = new Backend\Transferencia;

if ($argc != 4) {
    echo "Utilize: php transferencia.php [origem] [destino] [valor].\n";
    exit(1);
}
$origem = $argv[1];
$destino = $argv[2];
$valor = $argv[3];

if($origem <=0){
	echo "O numero da conta de origem deve ser maior que 0!";
	exit(1);
}

if($destino <=0){
	echo "O numero da conta de destino deve ser maior que 0!";
	exit(1);
}

if($valor <=0){
	echo "O valor da transferencia deve ser maior que 0!";
	exit(1);
}

echo $transferencia->transferir($origem, $destino,$valor);