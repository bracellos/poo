<?php
namespace app\interfaces;

interface Futebol{

    public function apita();
    public function tempo($m);
    public function mostraCartao($tipo, $jogador);
}