<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Состояние ремонта</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <!--менб-->
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">RST Service</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="btn btn-outline-primary" href="index.php">Назад</a>
</div>
  </nav>
  </header>
   <div class="container text-center mt-5 col-md-10 p-lg-2 mx-auto my-5">
    <form  id="repform" action="">
    <input type="phone" id="phone" placeholder="Введите номер телефона" class="form-contact"> <br>
    <button type="button" id="sendRep" class="btn btn-success mt-1">Проверить</button>
    </form>
    <div id="errorMessage" class="">
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/repform.js"></script>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- футер -->
    <hr class="featurette-divider">
  <footer class="container">
    <p class="text-center mt-4">&copy;2020 RST Service</p>
  </footer>
</main>
</body>
</html>
