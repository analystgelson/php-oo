<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$conta = new GM\Conta\Types\ContaType();
$conta->depositar(10);

$bancoSantander = new GM\Banco\Santander();
$bancoSantander->setConta($conta);
$bancoSantander->setNome("Santander Exemplo");

$bancoSantander->getConta()->getSaldo();

$resultado = Math::somar(10,10);

// require_once "Pessoa.php";

// $pessoa1 = new Pessoa("Gelson", 29);

// $pessoa2 = new Pessoa("Moraes", 28);

// echo $pessoa1->correr();

// require_once "Produto.php";
// require_once "Tenis.php";

// $produto = new Produto();
// $produto->setNome("Tenis Exemplo")
//         ->setDescricao("Essa é descrição do produto")
//         ->setEstoque(10)
//         ->setValor(1000);

// $produto->getNome();
