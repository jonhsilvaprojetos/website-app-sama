<?php

$dsn = "mysql:dbname=app_sama;host=mysql995.umbler.com";
$dbuser = "app_sama_bd";
$dbpass = "root2019";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    //echo "Conectado com sucesso!";
} catch(PDOException $e){
    echo "Falhou conexão: ".$e-getMessage();
}

?>