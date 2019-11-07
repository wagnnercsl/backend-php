<?php

namespace Moovin\Job\Backend;

/**
 * Classe para conta poupança
 *
 * @author Wagnner Leivas <wagnner.leivas@gmail.com
 *
*/
class ContaPoupanca{

	private $limite = 1000.00;
	private $taxa = 0.80;
	private $saldo;

	public function getLimite(){
		return $this->limite;
	}

	public function getTaxa(){
		return $this->taxa;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getSaldo(){
		return $this->saldo;
	}

}