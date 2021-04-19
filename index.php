<?php 
    require ('assets/config/config.php');
    require ('post.class.php');
    //numero de itens por pagina
    
    $post = new Post();

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
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-md navbar-light justify-content-between align-items-center">
                <a href="" class="navbar-brand"><img class="img-logo" src="assets/images/logomazukim.png" alt="Mazukim"></a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex align-items-center">
                    <div class="navbar-collapse collapse" id="navbarMenu">
                        <div class="navbar-nav">
                            <a href="#" id="me-nav" class="nav-item nav-link active">Site</a>
                            <a href="#" id="me-nav" class="nav-item nav-link active">Blog</a>
                            <a href="#" id="me-nav" class="nav-item nav-link active">Destaques</a>
                            <a href="cadastro.php" id="me-nav" class="nav-item nav-link active">Novo Artigo</a>

                        </div>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control " type="search" placeholder="Pesquisar..." aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </div>
               
                
            </nav>

            <div class="col-sm-12 fundo-banner d-flex justify-content-between">
                <div class="col-sm-8 d-flex justify-content-center flex-column align-items-center">
                    <div>
                        <div>
                            <h3 class="title">CADASTRE-SE PARA RECEBER CONTEÚDO EM PRIMEIRA MÃO!</h3>   
                        </div>
                        <form class="form col my-2 my-lg-0">
                            <div class="col d-flex">
                                <input id="email" class="form-control mr-2 " type="search" placeholder="Seu E-mail*" aria-label="email" required>
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
                <section class="col-sm-8">
                    <article class="card mb-3 border-0">
                        <img class="card-img-top" src="https://mazukim.com.br/blog/admin/images/materias/large/mobile-first.png" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title title-card-article">O Google Irá Priorizar a Indexação Para Mobile - Mobile First até Março de 2021</h2>
                            <p class="card-text content-card font-weight-normal">O movimento do mobile first não é novo, mas agora todos terão que se adaptar ou perderá posições!</p>
                            <p class="card-text"><small class="text-muted content-small">Por Romário Alves | 23 de Fevereiro de 2021 ás 13:51</small></p>
                        </div>
                        <div class="card-footer d-flex justify-content-center border-0 align-items-center">
                            <a href="" class="btn btn-outline-primary dropdown-toggle">
                                Continuar Lendo
                            </a>
                        </div>
                    </article>
                    <hr class="div-hr mt-3 mb-5">

                    <?php 
                        $dados = $post->getAll();

                        foreach($dados as $post){
                            $data = strtotime($post['data_postagem']);
                            $data = date("d/m/Y \á\s H:i:s", $data);
                    ?>

                    <a class="text-decoration-none" href="<?php echo $post['link_publicacao']; ?>">
                        <article class="d-flex flex-direction-column">  
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
                    
                  <?php } ?>

                </section>
                <aside class="col-sm-4 d-flex flex-column align-items-center">
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
        </div>

    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>



