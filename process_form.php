<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "etonisflorzfilho@gmail.com";
    $subject = "Nova mensagem do formulário de contato";
    $body = "Nome: $name\nEmail: $email\nTelefone: $phone\nMensagem: $message";

    if (mail($to, $subject, $body)) {
        header("Location: index.php?status=success");
    } else {
        header("Location: index.php?status=error");
    }
    exit();
}
?>
