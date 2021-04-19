<?php 
    require './assets/config/config.php';
    class Post{
        private $id;
        private $titulo;
        private $autor;
        private $conteudo;
        private $image;
        private $data;

        private $pdo;

        public function __construct(){
            $this->pdo = new PDO("mysql:dbname=db_mazukim;host=localhost", "root", "");
        }


        public function getAll(){
            $sql = "SELECT * FROM tb_post";
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0){
                return $sql->fetchAll();
            }else{
                return array();
            }
        }




    }