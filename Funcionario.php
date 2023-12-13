<?php
class Funcionario{
    public $nome;
    protected $salario;
    private $cpf;

    public function getFuncionario(){
        return "
        Nome: {$this->nome}<br>
        CPF: {$this->cpf}<br>
        Salário: {$this->salario}<br>
        ";
    }

    public function setSalario($value){
        $this->salario = $value;
    }

    public function setCPF($value){
        $this->cpf = $value;
    }
}

$diego = new Funcionario();
$diego->nome = "Diego";
$diego->setCPF("000.000.000-99");
$diego->setSalario(28.500);
echo $diego->getFuncionario();

$claudio = new Funcionario();
$claudio->nome = "Claudio";
$claudio->setCPF("123.345.678-00");
$claudio->setSalario(55.000);
echo $claudio->getFuncionario();


