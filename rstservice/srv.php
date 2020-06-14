<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$tel = strip_tags($_POST['tel']);
	
	$res = array();
	
	//Если переменная tel не имеет никаких значение выводится res с ошибкой
	if(empty($tel)) {
		$res['error'] = "Нужно добавить номер телефона!"; //Ошибка
		echo json_encode($res); //Вывод
		
		exit();
	}
	
	require 'vendor/autoload.php'; //Обращение к файлу autoload.php
	
	//Данные для отправки письма через swiftmailer
	$message = Swift_Message::newInstance();
	
	$message->setSubject('Обратный звонок');
	
	$message->setFrom(array('ssss@mail.ru' => 'ssss'));
	
	$message->setTo(array('admin@mail.ru'));
	
	$message->setBody('Перезвоните мне по номеру - '. $tel);
	
	$transport = Swift_MailTransport::newInstance();
	
	$mailer = Swift_Mailer::newInstance($transport);
	
	$result = $mailer->send($message);
	
	if($result) {
		$res['success'] = '';
	}
	
	echo json_encode($res);
		
	exit();
	
	
	
	
}

exit();