<?php
namespace app\polimorfismo\payments\pagseguro;
use app\polimorfismo\payments\Payment;

class Gateway extends Payment{

    public $payment;

    public function __construct(){
        $this->charge();
    }

    protected function charge(){
        $this->cobrancaPagseguro();
    }

    private function cobrancaPagseguro(){
        $this->payment = 'cobrando com pagseguro';
    }
}