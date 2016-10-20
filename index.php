<?php

// require_once "Pessoa.php";

// $pessoa1 = new Pessoa("Gelson", 29);

// $pessoa2 = new Pessoa("Moraes", 28);

// echo $pessoa1->correr();

require_once "Produto.php";
require_once "Tenis.php";

$tenis = new TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();


// if ( $tenis instanceof Tenis ) {
//     echo "É um tipo de tênis";
// } else {
//     echo "Não é um tipo de tênis";
// }
