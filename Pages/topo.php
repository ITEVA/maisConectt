<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Mais Conectt</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo RAIZ; ?>" target="_self">
        <script src="JS/jquery-1.11.3.min.js"></script>
        <?php if(file_exists("JS/{$url[0]}.js")) echo "<script src='JS/{$url[0]}.js'></script>"; ?>
        <script src="JS/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
        <script type="text/javascript" src="JS/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="JS/slider.js"></script>
        <script type="text/javascript" src="JS/agency.js"></script>
        <script type="text/javascript" src="JS/jquery.maskedinput.js"></script>


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
        <link rel="stylesheet" href="Css/home.css">
        <link rel="stylesheet" href="Css/agency.css">
        <!-- Latest compiled and minified JavaScript -->
        <?php echo (file_exists("Css/{$url[0]}.css")) ? "<link rel=\"stylesheet\" href=\"Css/{$url[0]}.css\">" : ""; ?>

    </head>
    <body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="home"><img src="Images/logoMenu.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="home">Início</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="aempresa">A empresa</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="assinatura">Assinatura</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="teste">Teste de velocidade</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contatos">2ª via de boleto</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contatos">Contatos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="areaCliente">Área do cliente <i class="fa fa-user-o"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>











