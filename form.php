<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$tel = addslashes($_POST['tel']);
$message = addslashes($_POST['message']);

$para = "michael.ms.dev@gmail.com";
$assunto = "Contato - Portifólio";
$corpo = "Nome: " . $nome . "\n" .
    "E-mail: " . $email . "\n" .
    "Telefone: " . $tel . "\n" .
    "Mensagem: " . $message;

$cabeca = "From: michael.ms.dev@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X-Mailer:PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    echo "<script>window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Erro ao enviar mensagem. Tente novamente mais tarde.');</script>";
    echo "<script>window.location.href = 'index.html';</script>";
}

?>
