<?php

namespace Moovin\Job\Backend;

/**
 * Classe para depósito
 *
 * @author Wagnner Leivas <wagnner.leivas@gmail.com
 *
*/
class Deposito
{
    /**
     * Método de exemplo
     *
     * @return string
     */
    public function depositar($destino, $valor)
    {
        $nroDestino = $destino;

        $destino = new ContaCorrente($destino);

        $destino->setSaldo(2000);

        $saldoDestino = $destino->getSaldo();

		$novoSaldo = $saldoDestino + $valor;
		echo "Foram dspositados B$ $valor na conta $nroDestino!";
    }
}