<?php
 $to = "contato@joiceoliveirapsico.com.br";
 $assunto = "Contato do site";
 $mensagem = $_POST['mensagem']." - ".$_POST['nome']." - ".$_POST['email'];
 $email = $_POST['email'];


$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: $to, Joice <joicesousa.psicologia@gmail.com>';
$headers[] = 'From: $email';

 $status = mail($to, $assunto, $mensagem, implode("\r\n", $headers));

 if($status == true){
    echo "<script>alert('Email enviado com Sucesso!');location.href=\"index.html\";</script>";
 }
 else{
    echo "<script>alert('Não foi possível enviar o email.');location.href=\"index.html\";</script>";
 }
?>