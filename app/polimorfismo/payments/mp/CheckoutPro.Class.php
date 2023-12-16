<?php
namespace app\polimorfismo\payments\mp;
use app\polimorfismo\payments\Payment;

class CheckoutPro extends Payment{

    public function __construct(){
        $this->charge();
    }

    protected function charge(){
        $this->processaPagamento();
    }

    private function processaPagamento(){
        echo "pagamento com MP";
    }
}