<?php
namespace app\interfaces;

class Linha31 implements Blumob{
    public $saida, $chegada, $rota;

    public function __construct($rota, $saida, $chegada){
        $this->rota = $rota;
        $this->saida = $saida;
        $this->chegada = $chegada;
        echo "
        LINHA: {$this->rota()}
        SAÍDA: {$this->saida()}
        CHEGADA: {$this->chegada()}
        ";
    }
    public function saida(){
        return $this->saida;
    }

    public function chegada(){
        return $this->chegada;
    }
    public function rota(){
        return $this->rota;
    }
}