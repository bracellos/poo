<?php
require "Carro.php";
require "Pessoa.php";

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
$p1 = new Pessoa("Diego", 38);
$p1->getPessoa();
