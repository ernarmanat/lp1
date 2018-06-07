<?php 
$to  = "office@sitebuild.kz" ;
$userPacket = $_POST["packet"];
$userEmail = $_POST["email"];
$userName = $_POST["name"];
$userPhone = $_POST["phone"];
$subject = "Заявка с сайта lp.sitebuild.kz"; 

$message = ' 
<html> 
    <head> 
        <title>Заявка с сайта lp.100up.ru</title> 
    </head> 
    <body> 
        <p><strong>E-mail</strong>: '.$userEmail.'
        <br><strong>Имя</strong>: '.$userName.'
        <br><strong>Пакет</strong>: '.$userPacket.'
        <br><strong>Телефон</strong>: '.$userPhone.'</p> 
    </body> 
</html>'; 

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: 100up <admin@lp.sitebuild.kz>\r\n";  
$headers .= "Bcc: office@sitebuild.kz\r\n"; 

mail($to, $subject, $message, $headers); 
?>