$(document).ready(function(){
    var r1;
    $('div#emailSucesso').css("display", "none");
    $("#formContato").submit(function(){
        toastr.options.closeButton = true;
        toastr.info('O email está sendo encaminhado...', {timeOut: 3000});
        $.ajax({
            method: "POST",
            url: "Emails/emailContato.php",
            data: {nome:$('#nome').val(), email:$('#email').val(),
                mensagem:$('#mensagem').val()}
        }).done(function(result) {
            r1 = result;
            if(r1 == 1){
                toastr.options.closeButton = true;
                toastr.success('O email foi enviado com sucesso!', '', {timeOut: 3000});
                $("#formContato").each(function(){
                    this.reset();
                });
            } else {
                toastr.options.closeButton = true;
                toastr.error('Erro ao enviar email!', 'Tente novamente.', {timeOut: 3000});
            }
        });
        return false;
    });
});

