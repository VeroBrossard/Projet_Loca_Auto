// document.getElementById("btn").addEventListener("click", function(){
//   document.getElementById("contMenu").style.display = "block";
// })

// var openedMenu = false;

// function openCloseMenu(){
//   if (openedMenu == false){
//     openedMenu = true;
//     document.getElementById("contMenu").style.width = "200px";
//   } else {
//     openedMenu = false;
//     document.getElementById("contMenu").style.width = "0px";    
//   }
// }
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
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