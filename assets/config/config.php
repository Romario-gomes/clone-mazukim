<?php 

    $dsn="mysql:dbname=db_mazukim;host=localhost";
    $dbuser="root";
    $dbpass="";

    /* $dsn="mysql:dbname=db_mazukim;host=localhost";
    $dbuser="root";
    $dbpass=""; */

    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
    }catch(PDOException $e){
        echo "Falhou na conexao! ".$e->getMessage();
    }


?>