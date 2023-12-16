<?php
namespace app\polimorfismo\payments;

abstract class Payment{

    abstract protected function charge();
}