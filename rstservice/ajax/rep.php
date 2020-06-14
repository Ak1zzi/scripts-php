<?php
//Объявление переменных
 $phone = $_POST['phone']; //телефон

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?="; //тема
$headers = "From: $phone\r\nReply-to: $phone\r\nContent-type: text/html; charset=uft-8\r\n"; //шаблон получения

 $success = mail("frolov.yura2000@gmail.com", $subject, $phone, $headers); //вывод
 echo $success;
 ?>
