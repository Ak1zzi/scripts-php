<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-git.min.js"></script>
  <script src="js/script.js"></script>
  <title>RST Service - УСЛУГИ</title>
  </head>
  <body>
    
    <!--меню сайта-->
    <header>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-light border-bottom shadow-sm">
    <a href="index.php" class="btn btn-light btn-lg my-0 mr-md-auto font-weight-normal">RST Service</a> <!--Переход на главную страницу-->
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="btn btn-light" href="index.php">Главная</a> <!--Ссылка на главную страницу-->
      <a class="btn btn-light" href="uslugi.php">Услуги</a> <!--Ссылка на страницу c услугами-->
      <a class="btn btn-light" href="vkontakte.php">Контакты</a> <!--Ссылка страницу c контактами-->
      <a class="btn btn-outline-primary" href="repair.php">Состояние ремонта</a> <!--Ссылка на форму проверики состояния ремонта-->
      <a class="btn btn-outline-primary" href="login.php">Войти</a> <!--Ссылка на форму авторизации аккаунта-->
 </div>
 </div>
</div>
    </nav>
    </header>
    <main>
      <div class="container">
        </div>
        <div class="position-relative overflow-hidden p-4 p-md-10 m-md-1 text-center bg-light">
    <div class="col-md-10 mx-auto">
      <h2 class="display-4 font-weight-normal">КАКИЕ УСЛУГИ МЫ ПРЕДОСТАВЛЯЕМ?</h2><br>
    </main>

    <!--Форма поиска-->
    <input class="form-control text-center" type="text" placeholder="Быстрый поиск" id="search-text" onkeyup="tableSearch()"> <!--инпут для ввода данных для поиска-->
    <table class="table mt-3" id="info-table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Услуга</th>
          <th scope="col">Цена</th>
        </tr>
      </thead>

      <!--Таблица с услугами-->
      <tbody>
        <tr>
          <th scope="row">Диагностика (смартфон)</th>
          <td>300 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена системного разъема (смартфон)</th>
          <td>от 800 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена сенсорного стекла (смартфон)</th>
          <td>от 1000 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена сенсорного стекла (смартфон)</th>
          <td>от 1000 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена дисплейного модуля (смартфон)</th>
          <td>от 1500 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена аккумулятора (смартфон)</th>
          <td>от 500 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена динамика/микрофона (смартфон)</th>
          <td>от 800 руб.</td>
        </tr>
        <tr>
          <th scope="row">Ремонт материнской платы (смартфон)</th>
          <td>от 1000 руб.</td>
        </tr>
        <tr>
          <th scope="row">Диагностика(ноутбук)</th>
          <td>500 руб.</td>
        </tr>
        <tr>
          <th scope="row">Чистка от пыли(ноутбук)</th>
          <td>от 800 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена матрицы(ноутбук)</th>
          <td>от 3000 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена клавиатуры(ноутбук)</th>
          <td>от 1000 руб.</td>
        </tr>
        <tr>
          <th scope="row">Ремонт корпуса(ноутбук)</th>
          <td>от 1000 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена жесткого диска(включая диск)(ноутбук)</th>
          <td>от 3500 руб.</td>
        </tr>
        <tr>
          <th scope="row">Прошивка BIOS(ноутбук)</th>
          <td>от 1500 руб.</td>
        </tr>
        <tr>
          <th scope="row">Установка/Восстановление операционной системы(ноутбук)</th>
          <td>от 1000 руб.</td>
        </tr>
        <tr>
          <th scope="row">Ремонт/Замена разъема питания(ноутбук)</th>
          <td>от 1500 руб.</td>
        </tr>
        <tr>
          <th scope="row">Замена материнской платы(ноутбук)</th>
          <td>от 1500 руб.</td>
        </tr>
      </tbody>
    </table>

    <!--Скрипт для быстрого поиска-->
    <script>
    function tableSearch() {
      var phrase = document.getElementById('search-text');
      var table = document.getElementById('info-table');
      var regPhrase = new RegExp(phrase.value, 'i');
      var flag = false;
      for (var i = 1; i < table.rows.length; i++) {
          flag = false;
          for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
              flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
              if (flag) break;
          }
          if (flag) {
              table.rows[i].style.display = "";
          } else {
              table.rows[i].style.display = "none";
          }

      }
  }
    </script>

<!--Форма с кнопкой вызова модального окна с формой обратной связи-->
<div class="window_wrap">
  
  <div class="window">
    
    <p>Оставьте ваш номер телефона<br/>и наш консультант свяжется с вами</p>
    
    <form id="backPhone" name="backPhone">
        <input class="form-control" name="telephone" type="Tel" id="telForm" maxlength="20" placeholder="Введите ваш номер телефона"/>
        <button id="telButton" type="submit" form="backPhone" class="btn btn-success mt-2">Заказать звонок</button>
    </form>
    
  </div>
  
</div>


<div class="telButton anim">
  
  <div class="telButton_border"></div>
  <div class="telButton_background"><span></span></div>
  <div class="telButton_hover">Заказать звонок</div>
  
</div>

    <br>
    <!-- футер сайта-->
    <hr class="featurette-divider">
  <footer class="container">
    <p class="text-center mt-4">&copy;2020 RST Service</p>
  </footer>

 <!--скрипт для плавающей кнопки upbutton-->
  <script>
      var smoothJumpUp = function() {
          if (document.body.scrollTop>0 || document.documentElement.scrollTop>0) {
              window.scrollBy(0,-50);
              setTimeout(smoothJumpUp, 20);
          }
      }

      window.onscroll = function() {
        var scrolled = window.pageYOffset || document.documentElement.scrollTop;
        if (scrolled > 100) {
        	document.getElementById('upbutton').style.display = 'block';
        } else {
        	document.getElementById('upbutton').style.display = 'none';
        }
      }
  </script>

  <!--Оформление кнопки upbutton-->
  <a id="upbutton" href="#" onclick="smoothJumpUp(); return false;">
    <svg class="bi bi-arrow-up-square-fill" width="2.5em" height="2.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 8.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z"/>
  </svg>
  </a>
</body>
</html>
