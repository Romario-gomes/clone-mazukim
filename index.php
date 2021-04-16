<?php 
    require ('assets/config/config.php');
    //numero de itens por pagina
    $itens_page = 5;


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
                    <a class="text-decoration-none" href="https://www.mazukim.com.br/blog/artigo/72/passo-a-passo-para-a-criacao-de-um-plano-de-marketing-efetivo">
                        <article class="d-flex flex-direction-column">  
                            <!-- Image article -->
                            <div class="col-sm-4 pl-0">
                                <img class="img-article" src="https://www.mazukim.com.br/blog/admin/images/materias/large/whatsapp-image-2020-12-07-at-19.28.18-1.png"  alt="Marketing afetivo">
                            </div>
                            <div class="cols-sm-8 pt-3">
                                <!-- Title and Subtitle article -->
                                <h2 class="title-article">Passo a Passo Para a Criação de um Plano de Marketing Efetivo.</h2>
                                <p><small class="text-muted content-small">Por Romário Alves | 23 de Fevereiro de 2021 ás 13:51</small></p>

                                <!-- Content article -->  
                                <p class="content-article">Criar um planejamento estratégico de marketing efetivo é o primeiro passo para o resultado positivo desta campanha e acredite, não é fácil criar um bom planejamento de marketing é necessário estudo, preparo, dedicação, além de saber as etapas essenciais para um planejamento estruturado.</p>
                                <!-- button article -->
                                <div class="button-article d-flex align-items-center justify-content-center ">
                                    <div class="btn btn-primary dropdown-toggle">Continuar Lendo </div>
                                </div>
                            </div>
                            
                            

                        </article>
                    </a>

                    <hr class="div-hr mt-3 mb-5">
                    <a class="text-decoration-none" href="https://www.mazukim.com.br/blog/artigo/71/marketing-para-advogados-no-google-ads-tudo-o-que-voce-precisa-saber-antes-de-comecar">
                        <article class="d-flex flex-direction-column">  
                            <!-- Image article -->
                            <div class="col-sm-4 pl-0">
                                <img class="img-article" src="https://www.mazukim.com.br/blog/admin/images/materias/large/marketing-juridico.png"  alt="Marketing para advogados">
                            </div>
                            <div class="cols-sm-8 pt-3">
                                <!-- Title and Subtitle article -->
                                <h2 class="title-article">Marketing Para Advogados no Google Ads: Tudo o Que Você Precisa Saber Antes de Começar!</h2>
                                <p><small class="text-muted content-small">Por Romário Alves | 23 de Fevereiro de 2021 ás 13:51</small></p>

                                <!-- Content article -->  
                                <p class="content-article">Quando o assunto é Marketing Jurídico, há muitas restrições impostas pela OAB e por isso, muitos advogados têm receio de impulsionar seus anúncios e outros muitos acreditam que não é permitido fazer isso.</p>
                                <!-- button article -->
                                <div class="button-article d-flex align-items-center justify-content-center ">
                                    <div class="btn btn-primary dropdown-toggle">Continuar Lendo </div>
                                </div>
                            </div>
                        </article>
                    </a>

                    <hr class="div-hr mt-3 mb-5">
                    <a class="text-decoration-none" href="https://www.mazukim.com.br/blog/artigo/70/otimizacao-de-sites-confira-8-dicas">
                        <article class="d-flex flex-direction-column">  
                            <!-- Image article -->
                            <div class="col-sm-4 pl-0">
                                <img class="img-article" src="https://www.mazukim.com.br/blog/admin/images/materias/large/otimizao-de-sites.png"  alt="Otimização de sites">
                            </div>
                            <div class="cols-sm-8 pt-3">
                                <!-- Title and Subtitle article -->
                                <h2 class="title-article">Otimização de Sites: Confira 8 Dicas.</h2>
                                <p><small class="text-muted content-small">Por Romário Alves | 23 de Fevereiro de 2021 ás 13:51</small></p>

                                <!-- Content article -->  
                                <p class="content-article">Otimizar um site é um trabalho que pode ser desafiador, mas extremamente importante para um resultado saudável e duradouro para o seu negócio e lembre-se quando falamos em otimização para um site os esforços devem ser em três pilares o design, conteúdo e velocidade.</p>
                                <!-- button article -->
                                <div class="button-article d-flex align-items-center justify-content-center ">
                                    <div class="btn btn-primary dropdown-toggle">Continuar Lendo </div>
                                </div>
                            </div>
                            
                            

                        </article>
                    </a>

                    <hr class="div-hr mt-3 mb-5">
                    <a class="text-decoration-none" href="https://www.mazukim.com.br/blog/artigo/69/o-que-e-inbound-marketing">
                        <article class="d-flex flex-direction-column">  
                            <!-- Image article -->
                            <div class="col-sm-4 pl-0">
                                <img class="img-article" src="https://www.mazukim.com.br/blog/admin/images/materias/large/inboud-marketing.png"  alt="Inbound Marketing">
                            </div>
                            <div class="cols-sm-8 pt-3">
                                <!-- Title and Subtitle article -->
                                <h2 class="title-article">O Que é Inbound Marketing?</h2>
                                <p><small class="text-muted content-small">Por Romário Alves | 23 de Fevereiro de 2021 ás 13:51</small></p>

                                <!-- Content article -->  
                                <p class="content-article">O Inbound Marketing, também conhecido como Marketing de atração, é uma estratégia usada por milhões de empresas ao redor do mundo e usa a criação de conteúdo a fim de impactar o público correto e criar uma conexão com ele, para que em determinado momento passem a consumir nosso produto ou serviço.</p>
                                <!-- button article -->
                                <div class="button-article d-flex align-items-center justify-content-center ">
                                    <div class="btn btn-primary dropdown-toggle">Continuar Lendo </div>
                                </div>
                            </div>
                            
                            

                        </article>
                    </a>

                    <hr class="div-hr mt-3 mb-5">
                    <a class="text-decoration-none" href="https://www.mazukim.com.br/blog/artigo/68/como-preparar-o-seu-negocio-para-vender-mais-na-black-friday-de-2020">
                        <article class="d-flex flex-direction-column">  
                            <!-- Image article -->
                            <div class="col-sm-4 pl-0">
                                <img class="img-article" src="https://www.mazukim.com.br/blog/admin/images/materias/large/black-friday-2020-1.png"  alt="Black friday">
                            </div>
                            <div class="cols-sm-8 pt-3">
                                <!-- Title and Subtitle article -->
                                <h2 class="title-article">Como Preparar o Seu Negócio Para Vender Mais na Black Friday de 2020.</h2>
                                <p><small class="text-muted content-small">Por Romário Alves | 23 de Fevereiro de 2021 ás 13:51</small></p>

                                <!-- Content article -->  
                                <p class="content-article">Devido a pandemia do novo Coronavírus o ano de 2020 foi marcado por uma grande queda tanto nas vendas de produtos, quanto na prestação de serviços, e por isso a Black Friday que já é uma data importante para os negócios, tem esse ano sua importância dobrada.  </p>
                                <!-- button article -->
                                <div class="button-article d-flex align-items-center justify-content-center ">
                                    <div class="btn btn-primary dropdown-toggle">Continuar Lendo </div>
                                </div>
                            </div>
                            
                            

                        </article>
                    </a>

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



