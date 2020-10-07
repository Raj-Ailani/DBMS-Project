$(document).ready(function(){
      
  $("#insertbutton").click(function(){
    var email = $("#insertemail").val();
      
      $.post("../Page/php/insertname.php", {
            user : email
      } , function(data,status){
        $("#demo").html(data);
   
      });
    });

});