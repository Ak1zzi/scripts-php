<?php 
session_start(); //Запуск сессии
session_destroy(); //Уничтожение сессии
header('Location: index.php'); //Перенаправление после выхода из акканута на главную страницу
exit;
 ?>