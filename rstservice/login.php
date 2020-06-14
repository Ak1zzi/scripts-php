<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title class="text-center">RST Service - ВХОД</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/stylereg.css">
</head>
 <!--меню-->
    <header>
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom shadow-sm">
    <a href="index.php" class="btn btn-light btn-lg my-0 mr-md-auto font-weight-normal">RST Service</a> <!--Переход на главную страницу-->
    <nav class="my-2 my-md-0 mr-md-3">
    	<a class="btn btn-outline-primary" href="index.php">Назад</a> <!--Кнопка для возрващения на главную страницу-->
 </div>
    </nav>
    </header>
<body>

<?php 
session_start(); //Запуск сессии
require('connect.php'); //Соединение с базой данных по файлу connect.php

//Объявление переменных
if (isset($_POST['username']) && isset($_POST['password'])){  
	$username = $_POST['username']; //логин
	$password = $_POST['password']; //пароль

	$query = "SELECT * FROM users WHERE (username = '$username' and password = '$password')"; //SQL-запрос для чтения из базы данные логина и пароля
	$result = mysqli_query($connetcion, $query) or die(mysqli_error($connetcion)); //Делаем запрос в БД (при неудачи запрос отклняется и выводится ошибка)
	$count = mysqli_num_rows($result); //Получаем число рядов из result

//Если count равна 1, то для пользователя создается сессия в противном случае выводится уведомление об ошибке
	if ($count == 1) {	
		$_SESSION['username'] = $username;
	}else {
		$fsmg = "Что-то пошло не так ..."; //Ошибка
	}
}

//Проверка на существование юзернейма в сессии 
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
//Уведомления об удачной авторизацией
	echo "Привет, " . $username .", "; 
	echo "вы авторизировались ";
	echo "<a href='logout.php' class='btn btn-success'> Выйти </a>"; //Кнопка для выхода из аккаунта
}

?>

	<div container>
		<form action="" class="form-signin" method="post">
			<h2>Хотите войти?</h2>
			<input type="text" class="form-control" name="username" placeholder="Введите логин" required><br> <!--инпут для ввода логина-->
			<input type="password" class="form-control" name="password" placeholder="Введите пароль" required><br> <!--инпут для ввода пароля-->
			<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button> <!--Кнопка для отправки данных-->
			<a href="indexreg.php" class="btn btn-lg btn-primary btn-block">Создать аккаунт?</a>
		</form>
	</div>
	<!-- футер -->
	<br><br><br><br><br><br><br><br><br><br>
    <hr class="featurette-divider">
  <footer class="container">
    <p class="text-center mt-4">&copy;2020 RST Service</p>
  </footer>
</body>
</html>