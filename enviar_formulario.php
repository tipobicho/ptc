<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $empresa = htmlspecialchars($_POST['empresa']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $descricao = htmlspecialchars($_POST['descricao']);

    // Endereço de e-mail do destinatário (substitua pelo seu e-mail)
    $to = 'estefaniogoncalves1@gmail.com';
    $subject = 'Novo Pedido de Reserva - Protocolo de Sonhos';

    // Corpo do e-mail
    $message = "
        <h2>Detalhes do Pedido de Reserva</h2>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Empresa / Evento:</strong> $empresa</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>Descrição do Evento:</strong><br>$descricao</p>
    ";

    // Cabeçalhos do e-mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo 'Mensagem enviada com sucesso!';
    } else {
        echo 'Erro ao enviar mensagem. Por favor, tente novamente mais tarde.';
    }
}
?>
