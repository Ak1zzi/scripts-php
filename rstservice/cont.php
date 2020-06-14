<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>RST Service - ФОРМА СВЯЗИ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--меню сайта-->
  <header>
   <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom shadow-sm">
    <a href="index.php" class="btn btn-light btn-lg my-0 mr-md-auto font-weight-normal">RST Service</a> <!--Переход на главную страницу-->
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="btn btn-outline-primary" href="index.php">Назад</a> <!--Кнопка для возрващения на главную страницу-->
</div>
  </nav>
  </header>
  <!--Контактная форма-->
   <div class="container text-center mt-5 col-md-10 p-lg-2 mx-auto my-5">
    <form  id="mailform" action="">
    <input type="email" id="email" placeholder="Введите email" class="fform-control" required><br> <!--инпут для почты-->
    <input type="text" id="name" placeholder="Введите имя" class="form-contact" required><br> <!--инпут для имени-->
    <input type="phone" id="phone" placeholder="Введите номер телефона" class="form-contact" required> <br> <!--Инпут для номера телефона-->
    <textarea name="message" id="message" placeholder="Опишите проблему" class="form-contact" required></textarea><br> <!--поле для сообщения-->
    <button type="button" id="sendMail" class="btn btn-success mt-1" >Отправить сообщение</button> <!--Кнопка для отправки-->
    </form>
    <div id="errorMessage" class="">
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/formMail.js"></script>
    <br><br><br><br><br><br><br>
    <!-- футер -->
  <footer class="container">
    <hr class="featurette-divider">
    <p class="text-center mt-4">&copy;2020 RST Service</p>
  </footer>
</body>
</html>
