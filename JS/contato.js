﻿$(document).ready(function(){var o;$("div#emailSucesso").css("display","none"),$("#formContato").submit(function(){return toastr.options.closeButton=!0,toastr.info("O email está sendo encaminhado...",{timeOut:3e3}),$.ajax({method:"POST",url:"Emails/emailContato.php",data:{nome:$("#nome").val(),email:$("#email").val(),mensagem:$("#mensagem").val()}}).done(function(t){o=t,alert(t),1==o?(toastr.options.closeButton=!0,toastr.success("O email foi enviado com sucesso!","",{timeOut:3e3}),$("#formContato").each(function(){this.reset()})):(toastr.options.closeButton=!0,toastr.error("Erro ao enviar email!","Tente novamente.",{timeOut:3e3}))}),!1})}),$(function(){$("#mapa").mouseenter(function(){$(".infoMapa").css("display","block")})}),$(function(){$("#mapa").mouseout(function(){$(".infoMapa").css("display","none")})});