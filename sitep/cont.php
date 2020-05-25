<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
   <div class="container text-center mt-5 col-md-10 p-lg-2 mx-auto my-5">
    <form  id="mailform" action="">
    <input type="email" id="email" placeholder="Email" class="form-contact"><br>
    <input type="text" id="name" placeholder="Введите имя" class="form-contact"><br>
    <input type="phone" id="phone" placeholder="Телефон" class="form-contact"> <br>
    <textarea name="message" id="message" placeholder="Сообщение" class="form-contact"></textarea><br>
    <a class="btn btn-success" href="index.php" role="button">Вернуться на главную</a>
    <button type="button" id="sendMail" class="btn btn-success" >Отправить сообщение</button>
    </form>
    <div id="errorMessage" class="">
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/formMail.js"></script>
</body>
</html>
