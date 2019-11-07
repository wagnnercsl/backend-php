<?php

require_once __DIR__ . '/vendor/autoload.php';

use Moovin\Job\Backend;

$saque = new Backend\Saque;

if ($argc != 3) {
    echo "Utilize: php saquepoupanca.php [numconta] [valor].\n";
    exit(1);
}
$numconta = $argv[1];
$valor = $argv[2];

if($numconta <=0){
	echo "O numero da conta deve ser maior que 0!";
	exit(1);
}

if($valor <=0){
	echo "O valor do saque deve ser maior que 0!";
	exit(1);
}

echo $saque->saquePoupanca($numconta,$valor);