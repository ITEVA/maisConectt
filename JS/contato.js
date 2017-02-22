$(document).ready(function(){
    $('div#emailSucesso').css("display", "none");
    $("#formContato").submit(function(){
        $.ajax({
            method: "POST",
            url: "Emails/emailContato.php",
            data: {nome:$('#nome').val(), email:$('#email').val(),
                mensagem:$('#mensagem').val()}
        }).done(function() {
            alert(data);
        });
        $('div#emailSucesso').css("display", "block");

        $("#formContato").each(function(){
            this.reset();
        });

        setTimeout(
            function(){
                location.reload();
            },4000
        );
        return false;
    });
});




/**
 * Created by MC 88 on 24/01/2017.
 */
