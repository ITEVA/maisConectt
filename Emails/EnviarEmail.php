<?php

function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){

    $mail = new PHPMailer(); //INICIA A CLASSE
    $mail->IsSMTP(); //Habilita envio SMPT
    //$mail->SMTPDebug  = 1;
    $mail->SMTPAuth = true; //Ativa email autenticado
    $mail->IsHTML(true);
    $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)

    /* Protocolo da conexão */
    $mail->SMTPSecure = "tls";

    $mail->Host = 'smtp.live.com'; //Servidor de envio
    $mail->Port = 587 ; //Porta de envio
    $mail->Username = 'gisellyazevedo@hotmail.com'; //email para smtp autenticado
    $mail->Password = 'gloriete12345'; //

    $mail->From = 'gisellyazevedo@hotmail.com'; //remetente
    $mail->FromName = 'LinkCE'; //nome remetente

    /* Enviar imagem */
    $mail->AddEmbeddedImage($logo, 'linkce');

    /*if($reply != NULL){
        $mail->AddReplyTo($reply,$replyNome);
    }*/

    /*if($anexo != NULL){
        $mail->AddAttachment($anexo);
    }*/

    $mail->Subject = $assunto; //assunto
    $mail->Body = $mensagem; //mensagem
    $mail->AddAddress($destino,$nomeDestino); //email e nome do destino


    if($mail->Send()) {
        return 1;
    } else {
        return 0;
    }
}
?> 