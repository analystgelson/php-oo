<?php

class Produto
{
    private $nome;
    private $descricao;
    private $valor;
    private $estoque;

    // public function __construct($nome, $descricao, $valor, $estoque)
    // {
    //     $this->nome = $nome;
    //     $this->descicao = $descricao;
    //     $this->valor = $valor;
    //     $this->estoque = $estoque;            
    // }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getEstoque() {
        return $this->estoque;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

        
    public function baixaEstoque()
    {
        $this->estoque = $this->estoque -1;
    }
}