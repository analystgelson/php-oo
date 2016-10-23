<?php

namespace GM\Conta\Types;


use GM\Conta\ContaAbstract;

class ContaType extends ContaAbstract
{	

	protected function calculoDeposito($valor)
	{
		return $valor += 10;
	}

}