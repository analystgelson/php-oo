<?php

namespace GM\Banco;

use \GM\Conta\ContaAbstract;

class Santander
{
	private $name;
	private $conta;

	public function __construct(ContaAbstract $conta)
	{
		$this->conta = $conta;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}		

	public function getNome()
	{
		return $this->nome;
	}

	public function setConta(ContaAbstract $conta)
	{
		$this->conta = $conta;
	}

	public function getConta()
	{
		return $this->conta;
	}

}