<?php
            
    function sendMail($assunto,$mensagem,$destino,$nomeDestino, $reply = NULL, $replyNome = NULL, $anexo = NULL, $logo){

        $mail = new PHPMailer(); //INICIA A CLASSE
        $mail->IsSMTP(); //Habilita envio SMPT
        //$mail->SMTPDebug  = 1;
        $mail->SMTPAuth = true; //Ativa email autenticado
        $mail->IsHTML(true);
        $mail->CharSet = "UTF-8"; // Charset da mensagem (opcional)
        
        /* Protocolo da conexão */
        $mail->SMTPSecure = "ssl";

        $mail->Host = 'smtp.gmail.com'; //Servidor de envio
        $mail->Port = 465 ; //Porta de envio
        $mail->Username = 'regisousa7@gmail.com'; //email para smtp autenticado
        $mail->Password = 'corinthians7'; //

        $mail->From = 'regisousa7@gmail.com'; //remetente
        $mail->FromName = 'MaisConectt'; //nome remetente

        /* Enviar imagem */
        $mail->AddEmbeddedImage($logo, 'maisconectt');
        
        if($reply != NULL){
            $mail->AddReplyTo($reply,$replyNome);
        }
        
        if($anexo != NULL){
            $mail->AddAttachment($anexo);
        }

        $mail->Subject = $assunto; //assunto
        $mail->Body = $mensagem; //mensagem
        $mail->AddAddress($destino,$nomeDestino); //email e nome do destino

        $enviado = $mail->Send();

        if (!$enviado) {
            return 0;
        } else {
            return 1;
        }
    }
?> 