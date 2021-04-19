<?php 
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
            $sql = "SELECT COUNT(*) as c FROM tb_post";
            $sql = $this->pdo->query($sql);
            $sql = $sql->fetch();
            $total = $sql['c'];
            $p=0;
            $paginas = $total / 5;


            $sql = "SELECT * FROM tb_post LIMIT $p, 5";
            $sql = $this->pdo->query($sql);
            
            if($sql->rowCount() > 0){
                return $sql->fetchAll();
            }else{
                return array();
            }
        }
        public function getForId($id){
            $sql = "SELECT * FROM tb_post WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($id));
            
            if($sql->rowCount() > 0){
                return $sql->fetch();
            }else{
                return array();
            }

        }
    
    }