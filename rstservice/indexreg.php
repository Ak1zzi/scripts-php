<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title class="text-center">RST Service - РЕГИСТРАЦИЯ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/stylereg.css">
</head>
 <!--меню сайта-->
    <header>
 <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom shadow-sm">
    <a href="index.php" class="btn btn-light btn-lg my-0 mr-md-auto font-weight-normal">RST Service</a> <!--Переход на главную страницу-->
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-outline-primary" href="login.php">Назад</a> <!--Кнопка для возрващения на главную страницу-->
 </div>
    </nav>
    </header>
<body>
<?php 
require('connect.php'); //Соединение с базой данных по файлу connect.php

//Объявление переменных
if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username']; //логин
	$email = $_POST['email']; //почта 
	$password = $_POST['password']; //пароль

	$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')"; //SQL-запрос для внесения в базу данные как имя почта пароль
	$result = mysqli_query($connetcion, $query); //Делаем запросу в БД

//Если переменная result получает данные выводится переменная smsg в противном случае fsmsg
	if ($result) {
		$smsg = "Регистрация прошла успешно"; //Сообщение о выполнении запроса
	} else {
		$fsmsg = "Ошибка"; //Сообщение об ошибке
	}
}
 ?>	
 	<!--Оформление регистрационной формы-->
	<div container>
		<form action="" class="form-signin" method="post">
			<h2>Форма регистрации</h2>
			<?php 
			//Оформление уведомлений
				if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php } ?> <
				<?php 
				if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?></div><?php } ?>
			<input type="text" class="form-control" name="username" placeholder="Введите логин" required><br> <!--инпут для ввода логина-->
			<input type="email" class="form-control" name="email" placeholder="Введите свою почту" required><br> <!--инпут для ввода почты-->
			<input type="password" class="form-control" name="password" placeholder="Введите пароль" required><br> <!--инпут для ввода пароля-->
			<input type="password" class="form-control" name="password" placeholder="Подтвердите пароль" required><br> <!--инпут для подтверждения пароля-->
			<button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button> <!--Кнопка для отправки данных-->
			<a class="btn btn-lg btn-primary btn-block" href="login.php">Уже есть аккаунт?</a> <!--Кнопка для перехода на страницу авторизации-->
		</form>
	</div>
	<!-- футер -->
	<br><br><br><br><br><br><br>
    <hr class="featurette-divider">
  <footer class="container">
    <p class="text-center mt-4">&copy;2020 RST Service</p>
  </footer>
</body>
</html>