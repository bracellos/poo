<?php
namespace app\pdo;
abstract class DataBase{
    abstract protected function connect();
    abstract public function insert($sql);
    abstract public function update($sql);
    abstract public function select($sql);
    abstract public function delete($sql);

}