<?php
class Corpo{
    /**
     * MODIFICADORES -> usados para determinar a visibilidade de um metodo ou atributo.
     * PUBLIC -> o mais permissivo, onde qualquer um pode acessar os metodos ou atributos de fora da classe
     * 
     * PRIVATE -> é o mais restritivo. Apenas a classe que definiu pode acessar os metodos ou atributos.
     * 
     * PROTECTED -> indica que que somente a classe que definiou ou herdeiras tem acesso aos metodos e atributos.
     */
    public $nome, $sexo;
    private $tipoSanguineo;
    protected $genetica;

    
}