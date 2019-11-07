<?php

namespace Moovin\Job\Backend;

/**
 * Classe para saque
 *
 * @author Wagnner Leivas <wagnner.leivas@gmail.com
 *
*/
class Saque
{
    /**
     * Método de exemplo
     *
     * @return string
     */
    public function saqueCorrente($numconta, $valor)
    {
    	$conta = new ContaCorrente;

    	$conta->setSaldo(1500);

    	$saldoConta = $conta->getSaldo();
    	$taxaConta = $conta->getTaxa();
    	$limite = $conta->getLimite();

    	

    	if($this->validaSaque($valor, $taxaConta, $limite, $saldoConta)){
    		$novoSaldo = ($saldoConta - $taxaConta) - $valor;
			echo "Foram sacados B$ $valor da conta $numconta!\n O novo saldo eh B$ $novoSaldo";
		}
    }

    public function saquePoupanca($numconta, $valor)
    {
    	$conta = new ContaPoupanca;
    	$conta->setSaldo(2000);

    	$saldoConta = $conta->getSaldo();
    	$taxaConta = $conta->getTaxa();
    	$limite = $conta->getLimite();

    	if($this->validaSaque($valor, $taxaConta, $limite, $saldoConta)){
    		$novoSaldo = ($saldoConta - $taxaConta) - $valor;
			echo "Foram sacados B$ $valor da conta $numconta!\n O novo saldo eh B$ $novoSaldo";
		}
    	else{
    		echo "Seu saque nao pode ser realizado, tente novamente.";
    	}
    	
    }

    public function validaSaque($valor, $taxaConta, $limite, $saldoConta){
    	if(($valor + $taxaConta) > $saldoConta){
			echo "Saldo insuficiente!\n O seu saldo eh B$ $saldoConta";
			return false;
		}

		if($valor > $limite){
			echo "O valor informado excede o limite!\n O seu saldo eh B$ $saldoConta";
			return false;
		}
		return true;
    }
}