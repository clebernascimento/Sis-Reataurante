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
        
        <!-- Pegando arquivos da pasta css -->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        
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
        <section id="corpo" >
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
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="mycontainer"> 
                        <div class="panel" id="mybox">
                            <?php
                                if($_POST['usuario'] == "admin" && $_POST['senha'] == "1234")
                                    {
                                    header('location: ../SWR-Restaurante/crud/pedido.php');
                                }else{
                                    echo"Usuario e/ou Senha Invalidos";
                                }
                            ?>
                            <form action="" method="POST">
                                <h3 class="text-center">Area Restrita</h3>
                                <div class="form-group">
                                    <label class='sr-only' for="usuario" >Usuário</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </div>
                                        <input type="text" name="usuario" id="usuario" class="form-control" required="" placeholder="Digite o usuário">
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label class='sr-only' for="senha" >Senha</label>
                                        <div class="input-group">    
                                            <div class="input-group-addon">
                                              <span class="glyphicon glyphicon-lock"></span>
                                            </div>
                                            <input type="password" name='senha' id="senha" class="form-control" required="" placeholder="Digite a senha">
                                        </div>
                                    </div>
                                  <div class="form-group">
                                      <input type="submit" class="btn btn-primary form-control" value="Logar"> 
                                  </div>
                            </form>   
                        </div>
                    </div>
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