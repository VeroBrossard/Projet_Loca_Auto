
// Get the modal
var modal = document.getElementById('id_form_user');

// When the user clicks anywhere outside of the modal, close it modale connexion
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal4 = document.getElementById('id_form_conn');
// When the user clicks anywhere outside of the modal, close it modale connexion
window.onclick = function(event) {
  if (event.target == modal4) {
    modal.style.display = "none";
  }
}


function openForm(){
  document.getElementById('id_form_conn').style.display='none';
  document.getElementById('id_form_user').style.display='block';
}

function openConn(){
  document.getElementById('id_form_user').style.display='none';
  document.getElementById('id_form_conn').style.display='block';
}