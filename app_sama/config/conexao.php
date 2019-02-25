<?php

/*
$dsn = "mysql:dbname=app_sama;host=mysql995.umbler.com";

$dbuser = "app_sama_bd";

$dbpass = "root2019";

*/

$dsn = "mysql:dbname=app_sama;host=localhost";

$dbuser = "root";

$dbpass = "";



try {

    $pdo = new PDO($dsn, $dbuser, $dbpass);

    //echo "Conectado com sucesso!";

} catch(PDOException $e){

    echo "Falhou conexão: ".$e-getMessage();

}



?>