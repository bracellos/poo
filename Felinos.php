<?php
require "Animais.php";
class Felinos extends Animais{
    public $som,
    $porte,
    $tipo;

    public function som(){
        return $this->som;
    }

    public function detalhes(){
        return "Porte: {$this->porte} Tipo: {$this->tipo}";
    }
}

$f = new Felinos();
$f->nome = "Zeca";
$f->idade = 4;
$f->especie = "Gato";
$f->som = "mia";
$f->porte = "pequeno";
$f->tipo = "domesticado";

echo "{$f->getEspecie()} {$f->detalhes()} Som: {$f->som()}<br>";

$leao = new Felinos();
$leao->nome = "Simba";
$leao->idade = 300;
$leao->especie = "Leao";
$leao->som = "Ruge";
$leao->porte = "grande";
$leao->tipo = "selvagem";

echo "{$leao->getEspecie()} {$leao->detalhes()} som: {$leao->som()}";

