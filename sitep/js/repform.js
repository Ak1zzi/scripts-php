$("#sendRep").on("click", function() {
 var phone = $("#phone").val().trim();

 if (phone == "") {
 $("#errorMessage").text("Введите телефон");
  return false;
}
$("#errorMessage").text("");

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
