<!DOCTYPE html>
<html>
    <head>
        <title>LinkCE</title>
        <link rel="shortcut icon" type="image/x-icon" href="Images/7162icontitle.ico">
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
        <script type="text/javascript" src="JS/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="JS/slider.js"></script>
        <script type="text/javascript" src="JS/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="JS/javascript.js"></script>
        <script type="text/javascript" src="JS/cobertura.js"></script>
        <script type="text/javascript" src="JS/contato.js"></script>
        <script type="text/javascript" src="JS/contrato.js"></script>


        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="Css/bootstrap.min.css">
        <link rel="stylesheet" href="Css/carrousel.css">
        <link rel="stylesheet" href="Css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/slider.css">
        <link rel="stylesheet" href="Css/animate.css">
        <link rel="stylesheet" href="Font/css/font-awesome.min.css">

        <link rel="stylesheet" href="Css/topo.css">
        <link rel="stylesheet" href="Css/style.css">
        <link rel="stylesheet" href="Css/home.css">
        <link rel="stylesheet" href="Css/planos.css">
        <link rel="stylesheet" href="Css/empresa.css">
        <link rel="stylesheet" href="Css/cobertura.css">
        <link rel="stylesheet" href="Css/contrato.css">
        <link rel="stylesheet" href="Css/contatos.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="JS/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <?php echo (file_exists("Css/{$url[0]}.css")) ? "<link rel=\"stylesheet\" href=\"Css/{$url[0]}.css\">" : ""; ?>

    </head>
    <body>
        <div id="logoMenu">
            <a href="home"><img src="Images/logoColorida.png" id="logomenu"></a>
            <div id="areaCliente">
                <button type="button" class="btn btn-default"><i class="fa fa-user-o" aria-hidden="true""></i><spam>ÁREA DO CLIENTE</spam></button>
            </div>
         </div>
        <nav id="navbar" class="navbar navbar-default" style="margin-bottom:0px;">
            <div class="container-fluid" id="menu">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                    <div id="center">
                        <ul class="nav navbar-nav" id="posmenu">
                            <!--<li><a href="#">Área do cliente</a></li>-->
                            <li><a href="home">INÍCIO</a></li>
                            <li><a href="aempresa">A EMPRESA</a></li>
                            <li><a href="planos">PLANOS</a></li>
                            <li><a href="corporativo">CORPORATIVO</a></li>
                            <li><a href="cobertura">ÁREA DE COBERTURA</a></li>
                            <li><a href="contatos">CONTATOS</a></li>
                        </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>









