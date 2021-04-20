<?php 
    require ('assets/config/config.php');
    require ('post.class.php');
    require ('usuario.class.php');

    //numero de itens por pagina
    
    $post = new Post();
    $usuario = new Usuario();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Mazukim</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/styles.css"/>

    </head>
    <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between align-items-center">
                <a href="" class="navbar-brand col-lg col-md-10 col-sm-10 col-sx-10"><img class="img-logo" src="assets/images/logomazukim.png" alt="Mazukim"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex align-items-center">
                    <div class="navbar-collapse collapse" id="navbarMenu">
                        <div class="navbar-nav mr-auto">
                            <a href="https://www.mazukim.com.br/index/" id="me-nav" class="nav-item nav-link active">Site</a>
                            <a href="https://www.mazukim.com.br/blog/index/" id="me-nav" class="nav-item nav-link active">Blog</a>
                            <a href="https://www.mazukim.com.br/blog/destaques/" id="me-nav" class="nav-item nav-link active">Destaques</a>
                            <a href="https://www.mazukim.com.br/blog/contato/" id="me-nav" class="nav-item nav-link active">Contato</a>
                        </div>

                        <form class="form-inline mt-2 mt-md-0" method="POST" >
                            <input class="form-control col-sm-8 " type="search" name="pesquisa" placeholder="Pesquisar..." aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>

                    </div>
                    
                </div>
            </nav>


      <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="d-flex flex-row-reverse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
          
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> -->
    </header>





        <div class="container-fluid p-0">
            

            <div class="col-sm-12 fundo-banner d-flex justify-content-between">
                <div class="col-sm-8 d-flex flex-column justify-content-center  align-items-center">
                    <div>
                        <h3 class="title text-center">CADASTRE-SE PARA RECEBER CONTEÚDO EM PRIMEIRA MÃO!</h3>   
                        
                        <form class="form col my-2 my-lg-0" method="POST">
                            <div class="col d-flex">
                                <input id="email" class="form-control mr-2 " type="search" name="email" placeholder="Seu E-mail*" aria-label="email" required>
                                <button class="btn btn-email my-2 my-sm-0" type="submit">Enviar</button>
                            </div>     
                        </form>
                    </div>
                        
                </div>
                <div class="col-sm-4">
                    <div class="banner">    
                    </div>
                </div>
            </div>
            <div class="container d-flex flex-column align-items-center">
                <div class="title-main">
                    <h1 class="text-secondary"> Muito Conteúdo de Marketing Digital.<strong> Vamos Performar!</strong></h1>
                </div>
                <nav class="navbar navbar-expand-md navbar-light justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="navbar-collapse" >
                            <div class="navbar-nav ">
                                <a href="#" id="me-nav" class="nav-item nav-link active rounded h5 mr-1 ml-1 ">Dicas de Marketing</a>
                                <a href="#" id="me-nav" class="nav-item nav-link active rounded h5 mr-1 ml-1 ">Facebook</a>
                                <a href="#" id="me-nav" class="nav-item nav-link active rounded h5 mr-1 ml-1 ">Googles Ads</a>
                                <a href="#" id="me-nav" class="nav-item nav-link active rounded h5 mr-1 ml-1 ">Instagram</a>
                                <a href="#" id="me-nav" class="nav-item nav-link active rounded h5 mr-1 ml-1 ">Notícias</a>
                                <a href="#" id="me-nav" class="nav-item nav-link active rounded h5 mr-1 ml-1 ">SEO</a>
                            </div>
                        </div>
                    </div>                
                </nav>
            </div>
            <main id="main" class="container-fluid d-flex pl-5 pr-5">
                <section class="col-md-12">
                    <?php 
                        $postagem = $post->getForId(1);
                        $data = strtotime($postagem['data_postagem']);
                        $data = date("d/m/Y \á\s H:i:s", $data);
                    ?>

                    <a href="" class="text-decoration-none">
                        <article class="card mb-3 border-0">
                            <img class="card-img-top" src="<?php echo $postagem['img']; ?>" alt="<?php echo $postagem['titulo']; ?>">
                            <div class="card-body">
                                <h2 class="card-title title-card-article"><?php echo $postagem['titulo']; ?></h2>
                                <p class="card-text content-card font-weight-normal content-first-article"><?php echo $postagem['conteudo']; ?></p>
                                <p class="card-text"><small class="text-muted content-small">Por <?php echo $postagem['autor']; ?> | <?php echo $data; ?></small></p>
                            </div>
                            <div class="card-footer d-flex justify-content-center border-0 align-items-center">
                                <a href="" class="btn btn-outline-primary dropdown-toggle">
                                    Continuar Lendo
                                </a>
                            </div>
                        </article>
                    </a>
                   
                    <hr class="div-hr mt-3 mb-5">

                    <?php 
                        /* 
                        Calcular a quantidade total de paginas;
                        Definir quantidade de itens por pagina;
                        Criar a query utilizando o limite;
                        */
                        $sql = "SELECT COUNT(*) as c FROM tb_post WHERE id > 1";
                        $sql = $pdo->query($sql);
                        $sql = $sql->fetch();
                        $total = $sql['c'];
                        $paginas = ceil($total / 5);
                        $p=0;
                        $pg = 1;
                        if (isset($_GET['p']) && !empty($_GET['p'])){
                            $pg = addslashes($_GET['p']);
                        }
                        $p = ($pg-1) * 5 ;

                        $sql = "SELECT * FROM tb_post WHERE id > 1  LIMIT $p, 5";
                        $sql = $pdo->query($sql);

                        if($sql->rowCount() > 0){
                            foreach($sql->fetchAll() as $post){
                                $data = strtotime($post['data_postagem']);
                                $data = date("d/m/Y \á\s H:i:s", $data);
                    ?>

                    <a class="text-decoration-none" href="<?php echo $post['link_publicacao']; ?>">
                        <article class="d-flex flex-direction-row">  
                            <!-- Image article -->
                            <div class="col-sm-4 pl-0">
                            
                                <img class="img-article" src="<?php echo $post['img']; ?>"  alt="<?php echo $post['titulo']; ?>">
                            </div>
                            <div class="cols-sm-8 pt-3">
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
                    } ?>  
                    <nav aria-label="Page navigation" class="d-flex justify-content-center">
                        <ul class="pagination ">
                            <li class="page-item"><a class="page-link border-0" href="./?p=0">Primeira</a></li>
                            <?php
                                for($q=0;$q<$paginas;$q++){
                                    $estilo = "";

                                    if($q == $pg-1){
                                        $estilo = "active";
                                    }
                                    echo '<li class="page-item border-0 '.$estilo.'"><a class="page-link border-0" href="./?p='.($q+1).'">'.($q+1).'</a></li>';
                                }
                            ?>
                            <li class="page-item"><a class="page-link border-0" href="./?p=<?php echo $paginas ?>">Ultima</a></li>
                        </ul>
                    </nav>
                </section>
                <aside class="col-sm-4  d-flex flex-column align-items-center d-md-none d-lg-block">
                    <div class="title-aside h2 d-flex text-dark justify-content-center mt-3 mb-3 w-100 pt-3 pb-3 rounded-top bg-warning">
                        Mazukim
                    </div>
                    <a href="https://www.mazukim.com.br/index/" target="_blank">
                        <article class="card mb-3 text-center border-0" style="max-width: 19rem;">
                            <div class="card-header h2  text-secondary border-0 m-0 p-0">Consultoria em Marketing Digital</div>
                            <div class="card-body m-0">
                               <img src="assets/images/marketing-digital.png" alt="Marketing Digital" >
                            </div>
                        </article>
                    </a>
                    <a href="https://www.mazukim.com.br/servicos/3/facebook" target="_blank">
                        <article class="card mb-3 text-center border-0" style="max-width: 19rem;">
                                <div class="card-header h2  text-secondary border-0 m-0 p-0">Consultoria em Facebook Ads</div>
                                <div class="card-body m-0">
                                    <img src="assets/images/facebook.png" alt="Marketing Digital" >
                                </div>
                        </article>
                    </a>
                    <a href="https://www.mazukim.com.br/servicos/4/instagram" target="_blank">
                        <article class="card mb-3 text-center border-0" style="max-width: 19rem;">
                                <div class="card-header h2  text-secondary border-0 m-0 p-0">Consultoria em Instagram</div>
                                <div class="card-body m-0">
                                <img src="assets/images/instagram.png" alt="Marketing Digital" >
                                </div>
                        </article>
                    </a>
                        <article class="card mb-3 text-center border-0" style="max-width: 19rem;">
                            <div class="card-header h2 border-0 m-0 p-0">Conheça nossa agência</div>
                            <div class="card-body ml-4">
                                <p class="mb-4 font-weight-bold"> Seja Nosso Parceiro e Perfome Conosco no Mundo do Marketing Digital.</p>
                                <a href="https://mazukim.com.br/" id="btn-aside" class="btn btn-warning text-dark btn-lg pl-3 pr-3"><strong>CONFIRA</strong> </a>
                            </div>
                        </article>
                </aside>
            </main>

            <section class="container-fluid bg-secondary">
                <div class="container d-flex flex-column justify-content-center align-items-center pt-5 pb-5">
                    <div class="col-sm-8 text-white text-center title-section">
                        <p class="h2 m-0">QUER CONTINUAR CONSUMINDO CONTEÚDO PRODUZIDO PELO TIME DA AGÊNCIA MAZUKIM?</p> 
                        <p class="subtitle-section">Cadastre-se e Receba Conteúdo de Marketing Digital por E-mail. Vamos Perfomar!</p> 
                    </div>
                    <form class="form" method="POST">
                            <div class="col-sm-12 d-flex">
                                <input id="email-section" class="form-control mr-2 " type="search" placeholder="Seu E-mail*" name="email" aria-label="email" required>
                                <button class="btn btn-section-email my-2 my-sm-0 text-secondary font-weight-bold" type="submit">Eu quero!</button>
                            </div>     
                    </form>
                </div>
                <?php 
                    if(isset($_POST['email']) && !empty($_POST['email'])){
                        $email = addslashes($_POST['email']);
                        $usuario->getEmail($email);
                    }    
                ?>


            </section>
            <footer class="container-fluid pl-5 pr-5">
                <div class="container p-0">
                    <div class="row pt-5">
                        <div class="col-sm-6 d-flex flex-column justify-content-between p-0">
                            <div class="row"><img src="./assets/images/logomazukim.png" width="250" alt="Mazukim"></div>
                            <div class="row title-section"> <p class="subtitle-footer">Acreditamos que o Marketing Digital potencializa o empreendedorismo no Brasil. <strong>Nós queremos ajudar você também.</strong></p></div>
                        </div>
                        <div class="col ml-2">
                            <h3>Categorias</h3>
                            <nav>
                                <ul class="menu-footer">
                                    <li><a href="https://www.mazukim.com.br/blog/categoria/49/dicas-de-marketing">Dicas de marketing</a></li>
                                    <li><a href="https://www.mazukim.com.br/blog/categoria/43/facebook">Facebook</a> </li>
                                    <li><a href="https://www.mazukim.com.br/blog/categoria/45/google-ads">Google Ads</a></li>
                                    <li><a href="https://www.mazukim.com.br/blog/categoria/42/instagram">Instagram</a></li>
                                    <li><a href="https://www.mazukim.com.br/blog/categoria/50/noticias">Notícias</a></li>
                                    <li><a href="https://www.mazukim.com.br/blog/categoria/39/seo">SEO</a></li>
                                </ul>

                            </nav>
                        
                        </div>
                        <div class="col">
                            <h3>Agência Mazukim</h3>
                            <nav>
                                <ul class="menu-footer">
                                    <li><a href="https://www.mazukim.com.br/quemsomos/">Sobre</a></li>
                                    <li><a href="https://www.facebook.com/AgenciaMazukim">Página do facebook</a> </li>
                                    <li><a href="https://www.instagram.com/agenciamazukim">Instagram</a></li>
                                    <li><a href="https://www.mazukim.com.br/" class="btn btn-info mt-2 ">CONSULTORIA MARKETING</a></li>
                                </ul>

                            </nav>
                        </div>
                        
                    </div>
                </div>
                <hr class="div-hr mt-3 mb-5 ml-5 mr-5">

                <p class="h5 text-center mb-3">Site desenvolvido apenas para fins de estudos.</p>
            </footer> 

        </div>                              
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>