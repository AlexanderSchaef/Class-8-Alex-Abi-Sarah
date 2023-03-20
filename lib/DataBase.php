<?php 
class DataBase{
  const DB_DEBUG = false;
  public $pdo;
  public function __construct ($dataBaseUser, $dataBaseName){
    $this->pdo = null;
    $dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $dataBaseName;
  }
}
?>
