$(document).ready(function(){
  //Replie le titre en 400ms lors du clic sur #b1
  $("#b1").click(function(){
      $("h1").slideUp();
  });
  
  //Déplie le titre en 2 secondes lors du clic sur #b2
  $("#b2").click(function(){
      $("h1").slideDown(2000);
  });

  //Déplie le titre s'il est plié ou le plie s'il est déplié
  $("#b3").click(function(){
      $("h1").slideToggle(2000);
  });
});