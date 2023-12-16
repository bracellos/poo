<?php
namespace app\polimorfismo\aves;
use app\polimorfismo\Animal;

class Ave extends Animal{

    public function locomover(){
        return "Aves voam";
    }
}