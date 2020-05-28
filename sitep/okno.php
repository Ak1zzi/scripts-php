<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/styleokno.css">
</head>
<body>
	<a href="#modal" class="button openModal">Заказать обратный звонок</a>
	<a class="btn btn-outline-primary" href="index.php">Вернуться на главную</a>
	<div id="modal" class="modal">
    <div>
       <div class="text" align="center">
       <div id="blok_tel">
  <form action="" method="post" class="form1">
ЗАКАЗ ОБРАТНОГО ЗВОНКА
<input type="text" name="tel" class="inputbox" value="Введите номер телефона"
       onfocus="(this.value == '0123456789') && (this.value = '')"
       onblur="(this.value == '') && (this.value = '0123456789')">
<input type="submit" class="button" name="submit_tel">
  </form>
<?if(isset($_POST["submit_tel"])) 
{
$email = 'frolov.yura2000@gmail.com';
/* Отправляем email */
mail($email, "Заказ обратного звонка на сайте ...", "\n
Посетитель заказал обратный звонок! \n
Телефон : ".$_POST['tel']."
");
echo 'Заявка принята!';
}
?>
</div>


</div>
        <a href="#close" title="Закрыть">Закрыть</a>
    </div>        
</div>
</body>
</html>