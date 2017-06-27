$(document).ready(function(){  
    $('div#emailSucesso').css("display", "none");
    $('div#aguarde').hide();
    $('div#erro').css("display", "none");
    
    var r1;
    var envio = 0;

    $("#formContrato").submit(function(e){
        toastr.options.closeButton = true;
        toastr.info('O email está sendo encaminhado...', {timeOut: 3000});
        e.preventDefault();
        setTimeout(
            function(){
                toastr.warning('Aguarde uma confirmação', {timeOut: 3000});
            }, 4000);

        if(envio == 0){
        envio = 1;
        $.ajax({
        method: "POST",
        url: "Emails/contrato.php",
         data: {plano:$('#plano').val(), nome:$('#nome').val(), email:$('#email').val(), celular:$('#celular').val(), telefone:$('#telefone').val(),
                endereco:$('#endereco').val(), numero:$('#numero').val()}
        
        }).done(function(result) {
            r1 = result;
            alert(result);
            if(r1 == 1){
                toastr.options.closeButton = true;
                toastr.success('O email foi enviado com sucesso!', '', {timeOut: 3000});
                $("#formContrato").each(function(){
                    this.reset();
                });
            } else {
                toastr.options.closeButton = true;
                toastr.error('Erro ao enviar email!', 'Tente novamente.', {timeOut: 3000});
            }
        });
        }

        return false;
    });
});

function numeros(){
    var tecla = event.keyCode;
    if (tecla >= 48 && tecla <= 57){
        return true;
    }else{
        return false;
    }
}

function letras(){
    var tecla = event.keyCode;
    if (tecla >= 48 && tecla <= 57){
        return false;
    }else{
        return true;
    }
}

