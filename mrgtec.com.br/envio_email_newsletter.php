<?php

// session_start inicia a sessão
session_start();

// as variáveis $nome e $emailremetente recebem os dados digitados na página anterior
$nome = $_POST['name'];
$emailremetente = $_POST['email'];
$assunto = "Cadastro Newsletter MRGtec";

$body =
     "Nome: " .$nome. "\r\n".
     "E-mail: " .$emailremetente. "\r\n".
     "Assunto: " .$assunto. "\r\n";
/* $body -> Montando a mensagem a ser enviada no corpo do e-mail. */
//

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//
require './php/lib/vendor/autoload.php';
//
$mail = new PHPMailer(true); // Cria novo Objeto
//
       try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->Host = 'smtp.titan.email';
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->isHTML(true);
            $mail->setFrom('', 'Atendimento');
            $mail->addAddress('', 'Roberto');

            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body = nl2br($body);
            $mail->AltBody = nl2br(strip_tags($body));

            $mail->send();

            //echo "<script>alert('Cadastro para newsletter realizado com sucesso !!!'); location.href='?p=newsletter';</script>";
            echo "<script>alert('Cadastro para newsletter realizado com sucesso !!!');</script>";
        } catch (Exception $e) {
            echo "Erro: E-mail não enviado. Error PHPMailer: {$mail->ErrorInfo}";
        }
?>
