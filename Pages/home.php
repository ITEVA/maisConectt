<!--<link rel="stylesheet" href="../Css/home.css">
<link rel="stylesheet" href="Css/topo.css">-->
<script type="text/javascript" src="JS/scrollReveal.js"></script>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Banner 1 -->
    <div class="carousel-inner" role="listbox">
        <div id="banner1" class="item active">
            <div class="row-fluid">
                <div id="bandaLarga" class="animated fadeInDownBig txtBanner">
                    <img src="Images/banner/bandaLarga.jpg">
                </div>
            </div>
            <div class="row-fluid">
                <div id="oferta" class="animated fadeInLeftBig txtBanner margemTop">
                    <img src="Images/banner/oferta.png">
                </div>
                <div id="mega25" class="animated fadeInUpBig txtBanner margemTop">
                    <img src="Images/banner/mega.png">
                </div>
            </div>
            <img id="imgBanner1" src="Images/banner1.jpg" alt="Chania" width="100%">
        </div>

        <!-- Banner 2 -->
        <div id="banner1" class="item">
            <div class="row-fluid">
                <div id="rede" class="animated fadeInDownBig txtBanner">
                    <img src="Images/banner/rede.png">
                </div>
            </div>
            <div class="row-fluid">
                <div id="fibra" class="animated fadeInLeftBig txtBanner margemTop">
                    <img src="Images/banner/fibra.png">
                </div>
            </div>
            <div class="row-fluid">
                <div id="confira" class="animated fadeInUpBig txtBanner margemTop">
                    <img src="Images/banner/confira.png">
                </div>
            </div>
            <div class="btnBanner animated fadeIn">
                <button class="">Assine Já</button>
            </div>
            <img id="imgBanner1" src="Images/banner2.jpg" alt="Chania" width="100%">

        </div>

        <!-- Banner 3 -->
        <div id="banner1" class="item">
            <div class="row-fluid">
                <div id="rede" class="animated fadeInLeftBig txtBanner">
                    <img src="Images/banner/planos.jpg">
                </div>
            </div>
            <div class="row-fluid">
                <div id="fibra" class="animated fadeInRightBig txtBanner margemTop">
                    <img src="Images/banner/65preco.png">
                </div>
            </div>
            <div id="btnBanner3" class="btnBanner animated fadeIn">
                <button class="">Assine Já</button>
            </div>
                <img id="imgBanner1" src="Images/banner3.jpg" alt="Chania" width="100%">
            </div>
        </div>
        <div class="triangle-down"></div>
</div>

<!-- Por que ser nosso cliente -->

<!----------------------------- INICIO MODAL ------------------------------>

<div class="modal fade" id="contrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Forneça seus dados para receber um orçamento</h4>
            </div>
            <form id="formContrato" method="post">
                <div class="modal-body">

                    <div class="alert alert-success alert-dismissible" id="emailSucesso" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <strong>E-mail enviado com sucesso!</strong>
                    </div>

                    <div class="alert alert-info alert-dismissible" id="aguarde" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <strong>Aguarde...</strong>
                    </div>

                    <div class="alert alert-danger alert-dismissible" id="erro" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <strong>Erro ao enviar email. Tente novamente!</strong>
                    </div>

                    <ul class="row">
                        <li class="col-xs-6">
                            <input class="form-control" id="nome" onkeypress="return letras()" type="text"
                                   placeholder="Nome Completo" name="nome" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="email" type="email" placeholder="E-mail" name="email"
                                   required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="celular" type="tel" placeholder="Celular" name="celular"
                                   required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="telefone" type="tel" placeholder="Telefone"
                                   name="telefone"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="rua" type="text" onkeypress="return letras()"
                                   placeholder="Rua" name="rua" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <select required id="sel1" class="form-control" name="bairro">
                                <option value="">Selecione seu bairro</option>
                                <option id="lc" value="Curió">Curió</option>
                                <option value="Lagoa Redonda">Lagoa Redonda</option>
                                <option value="Itambé">Itambé</option>
                                <option value="Palmeirinha">Palmeirinha</option>
                                <option value="José de Alencar">José de Alencar</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control numero" onkeypress="return numeros()" id="numero" type="text"
                                   placeholder="Número" name="numero" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control complemento" type="text" placeholder="Complemento"
                                   id="complemento" name="complemento"/>
                        </li>

                    </ul>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="botao" id="enviar" value="Enviar" name="enviar"/>
                    <input type="reset" class="botao" id="limpar" value="Limpar"/>
                </div>
            </form>
        </div>
    </div>
</div>

<!----------------------------- FIM MODAL ------------------------------>




