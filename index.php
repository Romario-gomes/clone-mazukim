<?php 
    require ('assets/config/config.php');
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
                            <a href="#" id="me-nav" class="nav-item nav-link active">Contato</a>

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
            <div class="container d-flex">
                <div class="col-sm-8">
                    Lado Left
                </div>
                <div class="col-sm-4">
                    Lado right
                </div>
            </div>


        </div>

    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>



