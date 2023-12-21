<?php
namespace app\pdo;
use PDO;
use PDOException;

class Mysql extends DataBase{
    private $con,
    $host = "localhost",
    $base = "entra21",
    $username = "root",
    $password = "root";

    public $qrs; //query result storage
    public function __construct(){
        $this->connect();
    }
    protected function connect(){
        try{
            $this->con = new PDO("mysql:host={$this->host};dbname={$this->base}", $this->username, $this->password);
    
            //configurar PDO para lançar excessões no caso de erro
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Erro DataBase: {$e->errorInfo[2]}";
        }
    }

    public function insert($sql){
        try{
            $this->con->prepare($sql)->execute();
            if(!empty($this->con->lastInsertId())){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo "Erro: {$e->getMessage()}<br>";
            echo $sql; 
        }
    }
    public function update($sql){
        try{
            if($this->con->prepare($sql)->execute()){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo "Erro: {$e->getMessage()}<br>";
            echo $sql; 
        }
    }
    public function select($sql){
        $qry = $this->con->prepare($sql);
        $qry->execute();
        $this->qrs = $qry->fetchAll(PDO::FETCH_ASSOC);
        return $this;
    }

    public function delete($sql){
        try{
            if($this->con->prepare($sql)->execute()){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo "Erro: {$e->getMessage()}<br>";
            echo $sql; 
        }
    }
}