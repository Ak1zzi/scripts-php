<?php
 $phone = $_POST['phone'];

$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
$headers = "From: $phone\r\nReply-to: $phone\r\nContent-type: text/html; charset=uft-8\r\n";

 $success = mail("frolov.yura2000@gmail.com", $subject, $phone, $headers);
 echo $success;
 ?>
