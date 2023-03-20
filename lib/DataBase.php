<?php 
import passwords.php;
class DataBase{
  const DB_DEBUG = false;
  public $pdo;
  public function __construct ($dataBaseUser, $dataBaseName){
    $this->pdo = null;
    $dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $dataBaseName;
    $DataBasePassword= '';
    $end = substr($dataBaseUser, -6, 1);
    switch ($end) {
  case 'r':
    $DataBasePassword= $reader;
    break;
  case 'w':
    $DataBasePassword= $writer;
    break;
    }
  }
}
?>
