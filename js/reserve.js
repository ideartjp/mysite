$(function() {

  // 宿泊代表者用のフォームslideDown

  $('input[name="representativeStay"]').change(function() {

   var prop = $('#representativeCheckbox').prop('checked');

   if (!prop) {
     $('#representativeForm').slideDown(500);
   } else {
     $('#representativeForm').slideUp(500);
   }
 });

 // textareaの文字数カウント(countUp ver.)
 $('textarea').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        $('#countUp').html(thisValueLength);
    });

 // 支払い方法選択（クレジットカード選択時）
 $('input[name="payment"]').change(function() {

  var prop = $('#creditCard').prop('checked');

  if (prop) {
    $('#creditForm').slideDown(500);
  } else {
    $('#creditForm').slideUp(500);
  }
});


});
