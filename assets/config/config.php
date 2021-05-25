<?php 

    /* $dsn="mysql:dbname=db_mazukim;host=fdb30.awardspace.net	";
    $dbuser="3811549_mazukim";
    $dbpass=""; */

     $dsn="mysql:dbname=db_mazukim;host=localhost";
    $dbuser="root";
    $dbpass=""; 

    try{
        $pdo = new PDO($dsn,$dbuser,$dbpass);
    }catch(PDOException $e){
        echo "Falhou na conexao! ".$e->getMessage();
    }


?>