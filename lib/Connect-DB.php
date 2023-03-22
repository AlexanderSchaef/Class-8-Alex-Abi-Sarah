<!-- Connecting -->
<?php
define ('DATABASE_NAME', 'RERICKSO_labs');
include 'DataBase.php';
$thisDataBaseReader = new DataBase('rerickso_reader', DATABASE_NAME);
$thisDataBaseWriter = new DataBase('rerickso_writer', DATABASE_NAME);
?>
<!-- Connection complete -->
