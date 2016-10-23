<?php

abstract class ContaAbstract
{
	use ProcessoTrait;
	
	protected $saldo;

	public function iniciaProcesso()
	{
		echo "----- Inciando processo -----";
	}

	public function finalizaProcesso()
	{
		echo "----- Finaliza processo -----";
	}

	//o "final" não deixa o método ser sobrescrevido por class filha
	public final function depositar($valor)
	{
		$this->iniciaProcesso();
		$this->saldo += $this->calculoDeposito($valor);
		$this->finalizaProcesso();
		return true;

	}

	public function sacar($valor)
	{
		$this->iniciaProcesso();
		if ( $this->saldo >= $valor ) {
			$this->saldo -= $valor;
			$this->finalizaProcesso();
			return true;
		}
		$this->finalizaProcesso();
		return false;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	abstract protected function calculoDeposito($valor);
}