<?php
//Объявление переменных
 $email = $_POST['email']; //почта
 $name = $_POST['name']; //имя
 $phone = $_POST['phone']; //телефон
 $message = $_POST['message']; //сообщение

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?="; //тема
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=uft-8\r\n"; //шаблон получения

 $success = mail("frolov.yura2000@gmail.com", $subject, $message, $headers); //вывод
 echo $success;
 ?>
