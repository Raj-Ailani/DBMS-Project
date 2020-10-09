$(document).ready(function(){
      
  $("#insertbuttondriver").click(function(){
    var driemail = $("#insertemail").val();
    var driname = $("#insertname").val();
    var dripwd = $("#insertpwd").val();
    var drinumber = $("#insertnumber").val();
    var drigender = $("#insertgender").val();
    var driage = $("#insertage").val();
    var dridl = $("#insertdl").val();
    var driaadhar = $("#insertaadhar").val();
      $.post("../Page/php/insertdriver.php", {

          useremail : driemail,
            username: driname,
            userpwd: dripwd,
            usernumber: drinumber,
            usergender : drigender,
            userage : driage,
            userdl : dridl,
            useraadhar : driaadhar 

      } , function(data,status){
        $("#first").html(data);
        
      });
    });




    $("#insertbuttonuser").click(function(){
      var useemail = $("#insertuseremail").val();
      var usename = $("#insertusername").val();
      var usepwd = $("#insertuserpwd").val();
      var usenumber = $("#insertusernumber").val();
      var usecity = $("#insertusercity").val();
      var usestate = $("#insertuserstate").val();
        $.post("../Page/php/insertuser.php", {
  
            uemail : useemail,
              uname: usename,
              upwd: usepwd,
              unumber: usenumber,
              ucity:usecity,
              ustate : usestate
  
        } , function(data,status){
          $("#first2").html(data);
          
        });
      });


      $("#searchbuttonuser").click(function(){
        var searchemail = $("#email").val();
        var searchpwd = $("pwd").val();
        $.post("../Page/php/searchuser.php",{
            uemail : searchemail,
            upwd : searchpwd

        },function(data,status){
            $("#first3").html(data);
      
        });

    });
  
  




















});