<?php

// require_once "Pessoa.php";

// $pessoa1 = new Pessoa("Gelson", 29);

// $pessoa2 = new Pessoa("Moraes", 28);

// echo $pessoa1->correr();

require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();
$produto->setNome("Tenis Exemplo")
        ->setDescricao("Essa é descrição do produto")
        ->setEstoque(10)
        ->setValor(1000);

$produto->getNome();
