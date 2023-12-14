<?php
//conceitos de herança

//CLASSE MÃE
class Animais{
    public $nome, 
    $idade,
    $especie;

    public function getEspecie(){
        return $this->especie;
    }
}