<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];

    // Constrói o corpo do e-mail
    $mensagem = "Nome: $nome\n";
    $mensagem .= "Telefone: $telefone\n";
    $mensagem .= "E-mail: $email\n";
    $mensagem .= "Comentário: $comentario\n";

    // Endereço de e-mail para onde você quer enviar os dados
    $destinatario = "felipegstarck@gmail.com";

    // Assunto do e-mail
    $assunto = "Novo formulário submetido";

    // Envia o e-mail
    mail($destinatario, $assunto, $mensagem);

    // Redireciona de volta para o site após o envio
    header('Location: obrigado.html');
}
?>
