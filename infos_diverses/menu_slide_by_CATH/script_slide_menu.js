// document.getElementById("btn").addEventListener("click", function(){
//   document.getElementById("contMenu").style.display = "block";
// })

var openedMenu = false;

function openCloseMenu(){
  if (openedMenu == false){
    openedMenu = true;
    document.getElementById("contMenu").style.width = "100px";
  } else {
    openedMenu = false;
    document.getElementById("contMenu").style.width = "0px";
    
  }
}
