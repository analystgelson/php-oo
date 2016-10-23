<?php

namespace GM\Conta\Types;


use GM\Conta\ContaAbstract;

class Conta extends ContaAbstract
{	

	protected function calculoDeposito($valor)
	{
		return $valor += 10;
	}

}