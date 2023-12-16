<?php
namespace app\polimorfismo\mamiferos;
use app\polimorfismo\Animal;

class Mamifero extends Animal{

    public function locomover(){
        return "mamiferos andam";
    }
}