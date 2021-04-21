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

        public function searchForWord($palavra){
            $sql = "SELECT * FROM tb_post WHERE nome LIKE ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array("%$palavra%"));

            if($sql->rowCount() > 0){
                return $sql->fetch();
            }else{
                return array();
            }


        }


    }


?>