<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Mensagem Site";
$phone = $_POST['message'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "belmorusinagem@gmail.com";

mail($recipient, $subject, $phone, $message, $mailheader) or die("Erro!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mail.css">
</head>
<body>
    <div class="container">
        <h1>Obrigado por entrar em contato. Seu email foi enviado com sucesso!</h1>
        <p class="back">Voltar para <a href="index.php">Página Inicial</a>.</p>
        
    </div>
</body>
</html>
';


?>
