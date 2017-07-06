<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Mais Conectt</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#103A61">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo RAIZ; ?>" target="_self">
        <script src="JS/jquery-1.11.3.min.js"></script>
        <?php if(file_exists("JS/{$url[0]}.js")) echo "<script src='JS/{$url[0]}.js'></script>"; ?>
        <script src="JS/bootstrap.min.js"></script>

        <script type="text/javascript" src="JS/agency.js"></script>
        <script type="text/javascript" src="JS/mapa.js"></script>
        <!--<script type="text/javascript" src="JS/topo.js"></script>-->
        <script type="text/javascript" src="JS/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="JS/SmoothScroll.js"></script>
        <script type="text/javascript" src="JS/elementScroll.js"></script>
        <script type="text/javascript" src="JS/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="JS/toastr.min.js"></script>
        <!--<script type="text/javascript" src="JS/contato.js"></script>-->


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="Css/bootstrap.min.css">
        <link rel="stylesheet" href="Css/carrousel.css">
        <link rel="stylesheet" href="Css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/animate.css">
        <link rel="stylesheet" href="Font/css/font-awesome.min.css">

        <link rel="stylesheet" href="Css/topo.css">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="Css/assinatura.css">
        <link rel="stylesheet" href="Css/agency.css">
        <link rel="stylesheet" href="Css/toastr.min.css">
        <link rel="stylesheet" href="Css/home.css">
        <!-- Latest compiled and minified JavaScript -->
        <?php echo (file_exists("Css/{$url[0]}.css")) ? "<link rel=\"stylesheet\" href=\"Css/{$url[0]}.css\">" : ""; ?>

        <script>
            var url_atual = window.location.href;
            letra = url_atual.split("/");
            if(letra[4] == 'aempresa' || letra[4] == 'contato'){
                $("head").append("<style>.azul{background-color: #103A62;" +
                                              "height: 120px;" +
                                              "border-color: transparent;" +
                                              "margin-bottom: 0;" +
                                              "-webkit-transition: all 0.3s;" +
                                              "-moz-transition: all 0.3s;" +
                                              "transition: all 0.3s;}" +
                                "</style>");

                if($(window).width() <= 767){
                    $("head").append("<style>.azul{height: 70px;</style>");
                }
            }
        </script>

    </head>
    <body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix-top azul">
        <div class="navbar-header page-scroll header">
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <li class="primeiro">
                    <a class="page-scroll" href="home">Início</a>
                </li>
                <li>
                    <a class="page-scroll" href="aempresa">A empresa</a>
                </li>
                <li>
                    <a class="page-scroll" href="planos">Planos</a>
                </li>
                <li>
                    <a class="page-scroll" href="http://beta.speedtest.net/pt" target="_blank">Teste de velocidade</a>
                </li>
                <li>
                    <a class="page-scroll" href="https://www.santander.com.br/br/resolva-on-line/reemissao-de-boleto-vencido" target="_blank">2ª via de boleto</a>
                </li>
                <li>
                    <a class="page-scroll" href="contato">Contatos</a>
                </li>
                <li>
                    <a class="page-scroll" href="http://177.136.74.106:8080/sac/open.do?action=open&sys=SAC" target="_blank">Área do cliente <i class="fa fa-user-o"></i></a>
                </li>
            </ul>
        </div>

        <div class="container">
            <a class="navbar-brand page-scroll" href="home"><img src="Images/logoRodape.png" alt=""></a>

            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="primeiro">
                        <a class="page-scroll" href="home">Início</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="aempresa">A empresa</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="planos">Planos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://beta.speedtest.net/pt" target="_blank">Teste de velocidade</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://www.santander.com.br/br/resolva-on-line/reemissao-de-boleto-vencido" target="_blank">2ª via de boleto</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contato">Contatos</a>
                    </li>
                    <li title="Área do cliente" class="response">
                        <a class="page-scroll" href="http://177.136.74.106:8080/sac/open.do?action=open&sys=SAC" target="_blank"><i class="fa fa-user-o"></i></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://177.136.74.106:8080/sac/open.do?action=open&sys=SAC" target="_blank">Área do cliente <i class="fa fa-user-o"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>











