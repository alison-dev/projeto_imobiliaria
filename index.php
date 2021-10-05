<!doctype html>
<html lang="pt-br">
    <head>
        <title>Imobiliária Souza</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="_cdn/bootstrap-select/bootstrap-select.min.css">
        <link rel="stylesheet" href="_cdn/css/app.min.css">
    </head>
    <body>
        <header class="main_header bg-danger">
            <div class="header_bar">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="d-none d-lg-flex col-lg-4 justify-content-center align-items-center p-2 text-white">
                            <i class="icon-location-arrow"></i>
                            <p class="my-auto ml-3">Rua: Amsterdan n°271 Parque Vitória<br> Franco da Rocha/SP</p>
                        </div>

                        <div class="d-none d-md-flex col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
                            <i class="icon-clock-o"></i>
                            <p class="my-auto ml-3">Seg/Sex: 09:00hs - 18:00hs <br>Sab/Dom: Plantão</p>
                        </div>

                        <div class="d-flex col-4 col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
                            <i class="icon-envelope"></i>
                            <p class="my-auto ml-3">alisonfco@hotmail.com<br> +55 (11) 98866-3344</p>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">    
                    <div class="navbar-brand">
                        <a href="#">
                            <h1 class="text-hide">Imobiliária</h1>
                            <img src="assets/images/logo.png" alt="" title="" class="d-inline-block" width="280">
                        </a>
                    </div>                                

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end my-3" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-danger" href="#">Destaque</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Alugar</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>                        
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php
            $getApp = filter_input(INPUT_GET, "app", FILTER_SANITIZE_STRIPPED);
            if(empty($getApp))
            {
                require "widget/home.php";
            }elseif(!empty($getApp) && file_exists("widget/" . $getApp . ".php"))
            {
                require "widget/" . $getApp . ".php";
            }else
            {
                echo "Ooops, erro no app informado!";
            }
        ?>        

        <article class="main_optin bg-dark text-white py-5">
            <div class="container">
                <div class="row" style="max-width: 600px; margin: auto;">
                    <h1>Quer ficar por dentro das novidades?</h1>
                    <p>Deixe seu nome e seu melhor e-mail nos campos abaixo e nós vamos lhe informar sobre os melhores negócios e todos os lançamentos do sul da ilha</p>
                    <form action="">
                        <input class="form-control" type="text" name="name" placeholder="Nome" size="50">
                        <input class="form-control" type="email" name="email" placeholder="E-mail" size="50">
                        <button type="submit" class="btn btn-danger">Me avise!</button>
                    </form>
                </div>                
            </div>
        </article>

        <section class="main_footer bg-light" style="background: url(assets/images/footer.png) repeat-x bottom center; background-size: 10%; padding-bottom: 50px;">
            <div class="container py-5">
                <div class="row justify-content-around text-muted">
                    <div class="col-12 col-md-3 col-lg-3">
                        <h1 class="pb-2">Navegue <span class="text-danger">aqui!</span></h1>
                        <ul>
                            <li><a href="#" title="">Home</a></li>
                            <li><a href="#" title="" class="text-danger">Destaque</a></li>
                            <li><a href="#" title="">Alugar</a></li>
                            <li><a href="#" title="">Comprar</a></li>
                            <li><a href="#" title="">Contato</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-9 col-lg-6">
                        <h1 class="pb-2">Nos <span class="text-danger">conheça!</span></h1>
                        <p>Nossa maior satisfação é lhe ajudar a encontrar seu imóvel dos sonhos nos bairros do Sul da Ilha da Magia, em Florianópolis.</p>
                        <h1 class="pb-2">Quer <span class="text-danger">investir?</span></h1>
                        <p>Entre em contato com a nossa equipe e vamos lhe informar sempre sobre os melhores negócios.</p>
                    </div>

                    <div class="col-12 col-lg-3 text-center">
                        <button class="btn btn-danger icon-facebook icon-notext"></button>
                        <button class="btn btn-danger icon-instagram icon-notext"></button>
                        <button class="btn btn-danger icon-twitter icon-notext"></button>
                    </div>
                </div>
            </div>
        </section>

        <div class="main_copyright py-2 bg-danger">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12">
                        <p class="mb-0 main_copyright_address">imobiliária | CRECI 1234 | Rua: Amsterdan, 271 Parque Vitória - Franco da Rocha/SP</p>
                        <p class="mb-0 main_copyright_copy">Todos os Direitos Reservados - xFactoryApp ®</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="_cdn/bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>        
        <script src="_cdn/bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="_cdn/bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="_cdn/bootstrap-select/bootstrap-select.min.js"></script>
    </body>
</html>