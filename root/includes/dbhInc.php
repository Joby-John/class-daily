<?php
$dsn = "mysql:host=localhost;dbname=classdaily";
$dbusername = "root";
$dbpassword = "";

try{
   
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch( PDOException $e)
{
   echo "Conncetion Failed : ". $e->getMessage();
}



?>