
// Get the modal
var modal = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it modale connexion
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



// function myFunction() {
//   var x = document.getElementById("myDIV");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }
// }


// $(document).ready(function(){
//   //Replie le titre en 400ms lors du clic sur #b1
//   $("#b1").click(function(){
//       $("h1").slideUp();
//   });
  
//   //Déplie le titre en 2 secondes lors du clic sur #b2
//   $("#b2").click(function(){
//       $("h1").slideDown(2000);
//   });

//   //Déplie le titre s'il est plié ou le plie s'il est déplié
//   $("#b3").click(function(){
//       $("h1").slideToggle(2000);
//   });
// });