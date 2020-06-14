//Объявление переменных
$("#sendRep").on("click", function() {
 var phone = $("#phone").val().trim(); //телефон

//Если поле phone имеет пустое значение то выводится ошибка
 if (phone == "") {
 $("#errorMessage").text("Введите номер телефон"); //ошибка
  return false;
}
$("#errorMessage").text("");

//Передача в файл rep.php с помощью ajax
$.ajax({
 url: 'ajax/rep.php',
 type: 'POST',
 cache: false,
 data: {'phone': phone,},
 dataType: 'html',
 beforeSend: function() {
   $("#sendRep").prop("disabled", true);
 },
 success: function(data) {
   if(!data)
     alert("Ошибка! Сообщение не отправлено");
     else
     $("#repform").trigger("reset");

   $("#sendRep").prop("disabled", false);
 }
});


});
