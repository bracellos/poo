<?php
//CLASSE FILHA
// a classe filha herda metodos e atributos da classe mãe, desde que sejam, public ou protected
require "Animais.php";
class Cachorro extends Animais{

    public $som;

    public function som(){
        return $this->som;
    }
}

/// intanciando a classe (não faça isso em casa)

$dog = new Cachorro();
$dog->nome = "Max";
$dog->idade = 17;
$dog->especie = "Cachorro";
$dog->som = "late";

echo "O {$dog->getEspecie()} {$dog->som()}<br>";



