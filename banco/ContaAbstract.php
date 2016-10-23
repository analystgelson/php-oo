<?php

abstract class ContaAbstract
{

	protected $saldo;

	//o "final" não deixa o método ser sobrescrevido por class filha
	public final function depositar($valor)
	{
		$this->saldo += $this->calculoDeposito($valor);
		return true;

	}

	public function sacar($valor)
	{
		if ( $this->saldo >= $valor ) {
			$this->saldo -= $valor;
			return true;
		}
		return false;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	abstract protected function calculoDeposito($valor);
}