//Объявление переменных
 var email = $("#email").val().trim(); //почта
 var name = $("#name").val().trim(); //имя
 var phone = $("#phone").val().trim(); //телефон
 var message = $("#message").val().trim(); //сообшение

//Если поле email имеет пустое значение то выводится ошибка
if (email == "") {
 $("#errorMessage").text("Введите email"); //ошибка
  return false;
}

//Если поле name имеет пустое значение то выводится ошибка
else if (name == "") {
 $("#errorMessage").text("Введите имя"); //ошибка
  return false;
}

//Если поле phone имеет пустое значение то выводится ошибка
else if (phone == "") {
 $("#errorMessage").text("Введите телефон"); //Ошибка
  return false;

 //Если поле message имеет меньше 5 символов выводится уведомление с ошибкой 
}else if (message.length <5) {
 $("#errorMessage").text("Введите сообщение не менее 5 символов"); //Ошибка
  return false;
}

$("#errorMessage").text("");

//Передача в файл mail.php с помощью ajax
$.ajax({
 url: 'ajax/mail.php',
 type: 'POST',
 cache: false,
 data: { 'name': name, 'email': email, 'phone': phone, 'message': message },
 dataType: 'html',
 beforeSend: function() {
   $("#sendMail").prop("disabled", true);
 },
 success: function(data) {
   if(!data)
     alert("Ошибка! Сообщение не отправлено");
     else
     $("#mailform").trigger("reset");

   $("#sendMail").prop("disabled", false);
 }
});

