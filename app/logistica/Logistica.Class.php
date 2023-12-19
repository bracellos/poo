<?php
//correção do exercício sobre abstração
namespace app\logistica;
abstract class Logistica{
    abstract public function calculoValor();
    abstract public function valorTotal();
}