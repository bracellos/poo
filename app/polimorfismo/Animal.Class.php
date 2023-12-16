<?php
namespace app\polimorfismo;
//classe abstrata não pode ser instanciada
abstract class Animal{

    //apenas definimos a assinatura do método.
    abstract function locomover();
}