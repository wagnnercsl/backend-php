<?php

namespace Moovin\Job\Backend;

/**
 * Classe para transferência
 *
 * @author Wagnner Leivas <wagnner.leivas@gmail.com
 *
*/
class Transferencia
{
    /**
     * Método de exemplo
     *
     * @return string
     */
    public function transferir($origem, $destino, $valor)
    {
        $nroOrigem = $origem;
        $nroDestino = $destino;

    	$origem = new ContaCorrente($origem);

    	$origem->setSaldo(1500);

    	$saldoOrigem = $origem->getSaldo();

        $destino = new ContaCorrente($destino);

        $destino->setSaldo(2000);

        $saldoDestino = $destino->getSaldo();

    	if($this->validaTransferencia($saldoOrigem, $valor)){
            $novoSaldoOrigem = $saldoOrigem - $valor;
    		$novoSaldoDestino = $saldoDestino + $valor;
            echo "Conta: $nroOrigem \nSaldo atual: $saldoOrigem\n";
			echo "Foram transferidos B$ $valor para a conta $nroDestino!\n Seu saldo eh de B$ $novoSaldoOrigem";
		}
    }

    public function validaTransferencia($saldoOrigem, $valor){
    	if(($saldoOrigem - $valor)  < 0){
			echo "Saldo insuficiente!\n O seu saldo eh B$ $saldoOrigem";
			return false;
		}

		return true;
    }
}