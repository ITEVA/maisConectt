<?php

function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){

    $mail = new PHPMailer(); //INICIA A CLASSE
    $mail->IsSMTP(); //Habilita envio SMPT
    $mail->Host = 'smtp.office365.com'; //Servidor de envio
    $mail->Port = 587 ; //Porta de envio
    $mail->SMTPAuth = true; //Ativa email autenticado
    $mail->Username = 'giselly.reboucas@iteva.org.br'; //email para smtp autenticado
    $mail->Password = 'Iteva100'; //
    $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
    $mail->From = 'giselly.reboucas@iteva.org.br'; //remetente
    $mail->FromName = 'LinkCE'; //nome remetente

    $mail->IsHTML(true);


    /* Protocolo da conexão */
    //$mail->SMTPSecure = "tls";

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
        $mail->ErrorInfo;
    }
}
?> 