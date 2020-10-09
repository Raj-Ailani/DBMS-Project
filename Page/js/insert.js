$(document).ready(function(){
      
  $("#insertbutton").click(function(){
    var email = $("#insertemail").val();
    var name = $("#insertname").val();
    var pwd = $("#insertpwd").val();
    var number = $("#insertnumber").val();
    var gender = $("#insertgender").val();
    var age = $("#insertage").val();
    var dl = $("#insertdl").val();
    var aadhar = $("#insertaadhar").val();
      $.post("../Page/php/insertdriver.php", {

          useremail : email,
            username: name,
            userpwd: pwd,
            usernumber: number,
            usergender : gender,
            userage : age,
            userdl : dl,
            useraadhar : aadhar 

      } , function(data,status){
        $("#first").html(data);
   
      });
    });

});