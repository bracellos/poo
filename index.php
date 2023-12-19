<?php
use app\App;
use app\hello\BemVindo;
use app\hello\Hello;
use app\logistica\Correios;
use app\polimorfismo\aves\Ave;
use app\polimorfismo\mamiferos\Mamifero;
use app\polimorfismo\payments\mp\CheckoutPro;
use app\polimorfismo\payments\pagseguro\Gateway;
require "Autoload.php";
$load = new Autoload();

$meuCarro = new Carro();
$meuCarro->modelo = "Megane Grand Tour";
$meuCarro->cor = "Bege";
$meuCarro->getVeiculo();

$outroCarro = new Carro();
$outroCarro->modelo = "Ferrari";
$outroCarro->cor = "Vermelho";
$outroCarro->getVeiculo();

$meuCarro->getVeiculo();

//classe pessoa
$p1 = new Pessoa    ("Diego", 38);
$p1->getPessoa();

$app = new App();
echo "<br>";
$ola = new Hello();
echo "<br>";
$bv = new BemVindo();
echo "<br>";

//polimorfismo
$mamiferos = new Mamifero();
echo $mamiferos->locomover();
echo "<br>";

$ave = new Ave();
echo $ave->locomover();
echo "<br>";


$pagSeguro = new Gateway();
echo $pagSeguro->payment;
echo "<br>";

$mp = new CheckoutPro();
echo "<br>";

$correio = new Correios('88311120', '89040312', 96, 45, 10);
$correio->valorTotal();


