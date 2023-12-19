<?php
namespace app\logistica;
class Correios extends Logistica{

    public $tipo, $cepOrigem, $cepDestino, $larg, $alt, $peso, $prazo, $valor;

    public function __construct($origem, $destino, $largura, $altura, $peso){
        $this->tipo = "Correios";
        $this->cepOrigem = $origem;
        $this->cepDestino = $destino;
        $this->larg = $largura;
        $this->alt = $altura;
        $this->peso = $peso;
        $this->calculoValor();
    }

    public function calculoValor(){
        if($this->peso >= 100){
            $this->valor = (($this->larg * $this->alt) * $this->peso) / 100;
            $this->prazo = 7;
        }else{
            $this->valor = 50;
            $this->prazo = 3;
        }
    }

    public function valorTotal(){
        echo "
        TIPO: {$this->tipo}
        ORIGEM: {$this->cepOrigem}
        DESTINO: {$this->cepDestino}
        VALOR: {$this->valor}
        PRAZO: {$this->prazo}
        ";
    }
}