<?php 
import passwords.php;
class DataBase{
  const DB_DEBUG = false;
  public $pdo;
  public function __construct ($dataBaseUser, $dataBaseName){
    $this->pdo = null;
    $dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $dataBaseName;
    $dataBasePassword = '';
    $end = substr($dataBaseUser, -6, 1);
    switch ($end) {
  case 'r':
    $dataBasePassword = $reader;
    break;
  case 'w':
    $dataBasePassword = $writer;
    break;
    }
    
    try{
      $this->pdo = new PDO($dsn, $dataBaseUser, $dataBasePassword);
      
      if(!$this->pdo){
        if(self::DB_DEBUG){
          print PHP_EOL . '<!-- NOT Connected -->' . PHP_EOL;
        }
        $this->pdo = 0;
      } else {
         if (self::DB_DEBUG){
           print PHP_EOL . '<!-- Connected -->' . PHP_EOL;
         }
      }
    } catch (PDOException $e) {
      $error_message = $e->getMessage();
      if (self:: DB_DEBUG){
        print '<!-- Error connecting : ' . $error_message . '-->' . PHP_EOL;
      }
    }
    
    return $this->pdo;
  }
    public function select($query, $values = ''){
     $statement = pdo->prepare($sql);
     if(is_array($values)){
     $data = array($fieldValue);
     } else {
     $statement->execute();
     }
     $recordSet = $statement->fetchAll(PDO::FETCH_ASSOC);
     $statement->closeCursor();
     return $recordSet;
    }
}
?>
