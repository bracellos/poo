<?php
/**
 * MODIFICADORES DE ACESSO SAO USADOS PARA DETERMINAR A VISIBILIDADE DE UM METODO OU ATRIBUTO PERTENCENTE A UMA CLASSE, OU SEJA
 * DEFINIMOS SE ELE PODE OU NÃO SER ACESSADO DE FORA DA CLASSE EM QUE FOI DECLARADO
 * TEMOS 3 MODIFICADORES SENDO ELES:  PUBLIC, PRIVATE E PROTECTED
 * 
 * PUBLIC -> É O MAIS PERMISSIVO E O PADRÃO, INDICA QUE OS ATRIBUTOS OU MÉTODOS PODE SER ACESSADO POR OUTRAS CLASSES OU CODIGOS
 * PRIVATE -> é o mais restrito, indica que apenas a própria classe consegue acessar os atributos e métodos privados
 * PROTECTED -> indica que somente a classe declaradora ou as classes herdeiras podem acessar metodos e atributos protegidos
 * 
 */
class Classe{
    public $propPublica = "publico";
    public $env;
    private $version;
    private $propPrivada;
    protected $propProtegida = "protegido";

    //metodo construtor
    /**
     * o metodo construtor é executado sempre que um novo objeto for instanciado e antes de iniciar o objeto.
     */

    function __construct($v){
        $this->env = env;
        $this->version = $v;
    }

    public function metodoPublico(){
        echo $this->propPublica;
    }

    private function metodoPrivado(){
        return $this->propPrivada;
    }

    protected function metodoProtegido(){
        return $this->propProtegida;
    }

    public function getProtegido(){
        echo $this->metodoProtegido()."<br>";
    }

    public function setProtegido($value){
        $this->propProtegida = $value;
    }

}
const env = "local";

$teste = new Classe('2.0');
$teste->propPublica = "esta propriedade é publica";
$teste->getProtegido();
$teste->setProtegido('tem certeza que é? ');
$teste->getProtegido();
