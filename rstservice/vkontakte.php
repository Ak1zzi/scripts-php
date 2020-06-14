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
  <title>RST Service - КОНТАКТЫ</title>
  </head>
  <body>
    <!--меню-->
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
    </nav>
    </header>
    <!--Заголовок сайта-->
    <main>
      <div class="container">
        </div>
        <div class="position-relative overflow-hidden p-4 p-md-10 m-md-1 text-center bg-light">
    <div class="col-md-10 mx-auto ">
      <h2 class="display-4 font-weight-normal">ХОТИТЕ СВЯЗАТЬСЯ С НАМИ?</h2><br>
    </main>
    <!--Средняя часть сайта-->
    <br><br>
<form name="kont" class="" action="index.html" method="post">
  <h2 class="featurette-heading text-center"><svg class="bi bi-person-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> ИП Андраханов А.А.</h2>
  <h4 class="featurette-heading text-center"><a href="mailto:frolov.yura2000@gmail.com">Сервисный центр RST</a></h4><br><br>
</form>
<form name="kont" class="" action="index.html" method="post">
  <h2 class="featurette-heading text-center"><svg class="bi bi-phone" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
  <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Контактый телефон</h2>
  <h4 class="featurette-heading text-center"><a href="tel:79994957383">+7 (999) 495 73-83</a></h4><br><br>
</form>
</form>
<form name="kont" class="" action="index.html" method="post">
  <h2 class="featurette-heading text-center"><svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Наш адрес</h2>
  <h4 class="featurette-heading text-center"><a href="https://www.google.ru/maps/place/%D0%BF%D1%80.+%D0%9C%D0%B8%D1%80%D0%B0,+15,+%D0%A2%D0%BE%D0%BC%D1%81%D0%BA,+%D0%A2%D0%BE%D0%BC%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+634057/@56.5129939,84.9728553,17z/data=!3m1!4b1!4m5!3m4!1s0x432693a2515d92b1:0x5b1dbb6591bae223!8m2!3d56.512991!4d84.975044?hl=ru">Мастерская: г. Томск, пр. Мира, 15</a></h4>
</form>

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
<br><br>
    <!--футер сайта-->
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
