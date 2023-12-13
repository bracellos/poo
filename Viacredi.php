<?php
class Viacredi{
    public $cliente, $conta;
    private $saldo = 1000;

    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar($value = 0){
        if($value > 0){
            $this->saldo += $value;
        }
    }

    public function sacar($value){
        if($this->saldo >= $value){
            $this->saldo -= $value;
        }
    }

}

$c = new Viacredi();
echo $c->getSaldo()."<br>";
$c->depositar(1500);
echo $c->getSaldo()."<br>";
$c->sacar(87);
echo $c->getSaldo()."<br>";
