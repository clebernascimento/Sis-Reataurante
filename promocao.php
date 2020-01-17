<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!--Esta tag força o IE a usar as definições de CSS mais recentes, e
        evita que ele quebre o visual, no Modo de Compatibilidade.-->
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <!-- A tag de viewport faz o site ocupar todo o espaço disponível na
        janela, seja em celulares, tablets ou PC’s. -->
        <meta name="viemport" content="width=device-width, initial-scale=1">
        
        <title>SwR-Restaurante</title>
        
        <!-- icone na aba do navegador -->
        <link rel="shortcut icon" href="img/logo7.jpg" type="image/x-icon" />
        
        <!-- font -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
        
        <!-- Pegando arquivos da pasta css -->
        <link rel="stylesheet" type="text/css" href="css/promocao.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        
        <!-- Pegando arquivos da pasta bootstrap -->
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/font-awesome.min.css">
        
        <!-- Pegando arquivos da pasta js -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.min.js"></script>
    </head>
    <body>
        <!--Corpo -->
        <section id="event" >
            <!--Fundo em RGBA-->
            <div id="bg-color">
                    <!--Menu de Navegação para as paginas-->
                    <div class="navbar navbar-inverse navbar-static-top">
                        <!--Container do navbar-->
                        <div class="container">
                            <a class='navbar-header navbar-brand'>
                                SWR-Restaurante
                            </a>
                            <div class='nav navbar-nav'>
                                <!--Permite a responsividade do menu navbar.
                                    Caso o menu não ocupe a tela do dispositivo
                                o menu é mostrado atraves de 3 spans e com click é possivel ver os links 
                                o atributo data-target faz o redirecionamento para a div com os links    
                                -->
                                <button class='navbar-toggle' data-toggle='collapse' data-target='.myCollapse'>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                    <span class='icon-bar'></span>
                                </button>    
                            </div>
                            <div class="collapse navbar-collapse myCollapse">
                                <ul class='nav navbar-nav'>
                                    <li><a href="principal.php">Página Inicial</a></li>
                                    <li><a href="crud/add.php">Cardápio</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 text-center" style="padding:50px;">
                                    <h1 class="header-h">Prato do Dia</h1>
                                    <p class="header-p">Decorações 100% completas aqui</p>
                                </div>
                                <div class="col-md-12" style="padding-bottom:60px;">
                                    <div class="item active left">
                                        <div class="col-md-6 col-sm-6 left-images">
                                            <img src="img/res02.jpg" class="img-responsive">
                                        </div>
                                        <div class="col-md-6 col-sm-6 details-text">
                                            <div class="content-holder">
                                                <h2>Camarão ao Molho</h2>
                                                <p>Tempero agradavel bastante apimentado e com camarão sem miseria!!!</p>
                                                <address>
                                                    <strong>Local:</strong>
                                                    SwR-Restaurante
                                                    <br>
                                                    <strong>Aberto:</strong>
                                                    10:00am às 22:00pm
                                                </address>
                                                <a class="btn btn-imfo btn-read-more" href="crud/add.php">Ir para Cardapio</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </header>
            </div>
        </section> 
            <!-- footer -->
            <footer id="rodape">
                <p> &copy; Copyright 2018 - Todos Direitos Reservados a SwR - Restaurante <br>
                <a href="#" target="_blank"><img src="img/facebook2.png"></a>
                <a href="#" target="_blank"><img src="img/Twitter.jpg"></a>
                <a href="#" target="_blank"><img src="img/Instagran.jpg"></a>
                <a href="#" target="_blank"><img src="img/Linkedin.png"></a></p>
            </footer>
    </body>
</html>
