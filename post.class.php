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

        public function getForSearch($busca){
            $posts = array();
            $sql = $this->pdo->prepare("SELECT * FROM tb_post WHERE titulo LIKE CONCAT ('%',:titulo, '%')");
            $sql->bindValue(":titulo", $busca);
            $sql->execute();

            if($sql->rowCount() > 0){
                $posts = $sql->fetchAll();
                return $posts;
            }else{
                return $posts;
            }
        }
    

        public function exibir($posts, $p){
                foreach($posts as $post){
                    $data = strtotime($post['data_postagem']);
                    $data = date("d/m/Y \á\s H:i:s", $data);
                    ?>
                    <a class="text-decoration-none" href="<?php echo $post['link_publicacao']; ?>">
                        <article class="row">  
                            <!-- Image article -->
                            <div class="col-md-4 pl-0">  
                                <img class="img-article" src="<?php echo $post['img']; ?>"  alt="<?php echo $post['titulo'];?>">
                            </div>
                            <div class="col-md-8 pt-3">
                                    <!-- Title and Subtitle article -->
                                <h2 class="title-article"><?php echo $post['titulo']; ?></h2>
                                <p><small class="text-muted content-small">Por <?php echo $post['autor']; ?> | <?php echo $data ?></small></p>

                                <!-- Content article -->  
                                <p class="content-article"> <?php echo $post['conteudo']; ?> </p>
                                <!-- button article -->
                                <div class="button-article d-flex align-items-center justify-content-center ">
                                    <div class="btn btn-primary dropdown-toggle">Continuar Lendo </div>
                                </div>
                            </div>
                        </article>
                    </a>
                    <hr class="div-hr mt-3 mb-5">
                    <?php               
            }
        }
    }