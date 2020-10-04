$(document).ready(function(){
      
    $("button").click(function(){
      var name = $("input").val();
      $.post("../Page/php/driverdetail.php", {
        suggestion : name
      } , function(data,status){
        $("#demo").html(data);
      
      });
    });





    $('.carousel').carousel({
      interval: 2000
    });



















    
  
  });


  