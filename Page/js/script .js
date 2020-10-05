$(document).ready(function(){
      
    $("button").click(function(){
      var name = $("input").val();
      $.post("../Page/php/driverdetail.php", {
        suggestion : name
      } , function(data,status){
        $("#demo").html(data);
      
      });
    });


//Relational Model---------------------------------------------------------------
    var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


//ERD Model----------------------------------------------------------------
var modal1 = document.getElementById("myModal1");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg1");
var modal1Img = document.getElementById("img02");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal1.style.display = "block";
  modal1Img.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}
//----------------------------------------------------------------------












    $('.carousel').carousel({
      interval: 2000
    });



















    
  
  });


  