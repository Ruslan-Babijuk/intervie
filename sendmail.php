<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru','PHPmailer/language/');
$mail->IsHTML(true);

$mail->isSMTP();  
//$mail->SMTPDebug = 2;  


$mail->Host = 'smtp.gmail.com';  		
$mail->SMTPAuth = true;                               
$mail->Username = 'ruslan1999bab@gmail.com'; 
$mail->Password = '111rus12345678'; // 
$mail->SMTPSecure = 'tls';                           
$mail->Port = 587; 

$mail->setFrom('ruslan1999bab@gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('ruslan1999bab@gmail.com');// Кому будет уходить письмо 

$mail->Subject = 'Заявка с сайта.';
$mail->AltBody = 'Заявка с сайта.';


$body =   '<h1>Результаты теста №1</h1>'.'<h4>ПРОБЛЕМЫ СВЯЗАННЫЕ С КОЛЕННЫМ СУСТАВОМ</h4>';
//$body .=   ;


if(trim(!empty($_POST['S1']))){
    $body.='<p><strong>S1:</strong> '.$_POST[S1].'</p>';
}
if(trim(!empty($_POST['S2']))){
    $body.='<p><strong>S2:</strong> '.$_POST[S2].'</p>';
}
if(trim(!empty($_POST['S3']))){
    $body.='<p><strong>S3:</strong> '.$_POST[S3].'</p>';
}
if(trim(!empty($_POST['S4']))){
    $body.='<p><strong>S4:</strong> '.$_POST[S4].'</p>';
}
if(trim(!empty($_POST['S5']))){
    $body.='<p><strong>S5:</strong> '.$_POST[S5].'</p>';
}
if(trim(!empty($_POST['S6']))){
    $body.='<p><strong>S6:</strong> '.$_POST[S6].'</p>';
}
if(trim(!empty($_POST['S7']))){
    $body.='<p><strong>S7:</strong> '.$_POST[S7].'</p>';
}














$mail->Body = $body;

if(!$mail->send()){
     $message = 'хана';
}else{
     $message = 'ОТПРАВЛЕННО';
 
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);

?>








