<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<h2>Регистрация</h2>
	<!--Save user - адреса обработчика-->
	<p>
	<form action="save_user.php" method="post"></form>
	<label for="">Ваш логин:<br></label>
	<input type="text" name="login" size="15" maxlength="15">
	</p>
	<!--В поле input login вводится логин длинною в 15 символов-->
	<p>
		<label for="">Ваш пароль:<br></label>
		<input type="password" name="password" size="15" maxlength="15">
		<!--В поле input password вводится пароль длинною в 15 символов--> 
	</p>
	<p>
		<input type="submit" name="submit" value="Зарегистрироваться">
		<!--Кнопка для регистрации отправляет данные в файл save_user.php-->
	</p>
</body>
</html>