<?php
class Pessoa{
    public $nome, $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getPessoa(){
        echo "{$this->nome}, {$this->idade} anos";
    }
}