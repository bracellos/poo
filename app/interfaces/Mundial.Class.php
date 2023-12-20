<?php
namespace app\interfaces;

class Mundial implements Futebol{

    public function tempo($m){
        echo "Tempo: {$m} ";
    }

    public function apita(){
        echo "Juiz apitando...<br>";
    }

    public function mostraCartao($tipo, $jogador){
        echo "Cartão {$tipo} para {$jogador}";
    }
}