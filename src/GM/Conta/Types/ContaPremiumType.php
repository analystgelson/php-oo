<?php

namespace GM\Conta\Types;

use GM\Conta\ContaAbstract;

class ContaPremiumType extends ContaAbstract
{
	
	public function __construct()
	{
		$this->saldo += 10;	
	}

	/**
	 * Estou sobrescrevendo a função da class Conta
	 */
	protected function calculoDeposito($valor)
	{
		//pegando o valor da class Conta
		//$valorNormal = parent::calculoDeposito($valor);
		return $valor +=20;
	}
}