<?php

$remetente    = 'From: noreply@venzocorretoradeseguros.com.br';
$destinatario = 'atendimento@venzocorretoradeseguros.com.br';
$assunto      = utf8_decode($_POST['assunto']);
$nome         = utf8_decode($_POST['nome']);
$email        = utf8_decode($_POST['email']);
$telefone     = utf8_decode($_POST['telefone']);
$mensagem     = utf8_decode($_POST['mensagem']);

$corpo = "
    Nome: " . $nome . "
    E-mail: " . $email . "
    Telefone: " . $telefone . "
    Mensagem: " . $mensagem . "
    Seguro desejado: " . $assunto . "
";

$send_email = mail($destinatario, $assunto, $corpo, $remetente);

if ($send_email) {
    header('location: enviado.html');
} else {
    header('location: naoenviado.html');
}

?>