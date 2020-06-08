<?php 
	if (isset($_POST['login'])) { $login = $_POST['login'];
	if ($login == '') { unset($login);} } //Заносим введеднный пользователем логин в переменную $login, если он пустой, уничтожаем переменную
	if (isset($_POST)) { $password = $_POST['password'];
	if ($password == '') { unset($password);} } //Аналогично, что с логином

if (empty($login) or empty($password)) //Если данные не введены скрипт останаливается
	{
	exit("Нужно заполнить все поля!");
	}
	//Если логин и пароль введены, то обрабатываем их
	$login = stripcslashes($login);
	$login = htmlspecialchars($login);
	$password = stripcslashes($password);
	$password = htmlspecialchars($password);
	//Удаляем лишние пробелы
	$login = trim($login);
	$password = trim($password);
	//Подключаемся к базе
	include ("bd.php");
	//проверка на существование пользователя с таким же логином
	$result = mysql_query("SELECT id FROM users WHERE login='$login'", $db);
	$myrow = mysql_fetch_array($result);
	if (!empty($myrow['id'])) {
	exit("Извините, введеный вами логин уже зарегистрирован.");
	}
//если такого нет, то сохраняем данные
	$result2 = mysql_query("INSERT INTO users (login, password) VALUES('$login', '$password')");
//проверяем есть ли ошибки
	if ($result2 == 'TRUE') {
	echo "Вы успешно зарегестрированы!";	
		}
	else {
		echo "Ошибка! Вы не зарегистрированы!";
	}	
 ?>