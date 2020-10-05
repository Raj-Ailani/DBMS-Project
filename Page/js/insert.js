$(document).ready(function(){
      
    $("#insertbutton").click(function(){
        var name = $("#exampleinput").val();
        var email = $("#exampleemail").val();
        var number =$("#examplenumber").val();
        var id =$("#exampleid").val();
        $.post("../Page/php/insertname.php", {
          UserName : name,
          UserEmail:email,
          UserNumber: number,
          UserId: id
        } , function(data,status){
          $("#demo").html(data);
           
        });
      });

});