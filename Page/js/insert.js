$(document).ready(function(){
      
    $("#insertbutton").click(function(){
       
        var email = $("#insertemail").val();

        var id =$("id").val();
        $.post("../Page/php/insertname.php", {
  
          UserEmail:email        
        } , function(data,status){
          $("#demo").html(data);
        
        });
      });

});