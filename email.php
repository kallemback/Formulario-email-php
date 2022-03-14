<?php


if(isset($_POST['email']) && !empty($_POST['email'])){

$name = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$telefone_whatsapp = htmlspecialchars($_POST['telefone_whatsapp']);
$cidade = htmlspecialchars($_POST['cidade']);
$message = htmlspecialchars($_POST['message']);


$to = "destinatario@dominio";
$subject = "Contato";
$body = "Nome:  ".$name. "\r\n".
        "Email: ".$email. "\r\n".
        "Telefone/Whatsapp: ".$telefone_whatsapp. "\r\n".
        "Cidade: ".$cidade. "\r\n".
        "Mensagem:  ".$message;
$header = "From:quemestaenviando@dominio"."\r\n".
            "Replay-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    header("Location: index.html");
die();
    //echo("Email enviado com sucesso!");

}else{
    echo("Email não pode ser enviado!");
}

}

?>