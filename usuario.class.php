<?php 
    class Usuario{
        private $email;
        private $pdo;

        public function __construct(){
            $this->pdo = new PDO("mysql:dbname=db_mazukim;host=localhost", "root", "");
        }

        public function getEmail($email){
            $sql = "INSERT INTO tb_email SET email = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($email));
        }

    }


?>