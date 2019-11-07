<?php

namespace Moovin\Job\Backend;

/**
 * Classe para conta corrente
 *
 * @author Wagnner Leivas <wagnner.leivas@gmail.com
 *
*/
class ContaCorrente{

	private $limite = 600.00;
	private $taxa = 2.50;
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