<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // E-mail do destinatário
    $to = "seu-email@dominio.com";

    // Assunto do e-mail
    $subject = "Nova mensagem do seu portfólio";

    // Corpo do e-mail
    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Enviar e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>


<!-- Addslashes > serve para tratamento de strings -->