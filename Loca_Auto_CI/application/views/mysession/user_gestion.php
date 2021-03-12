<?php
echo 'deouis user_gestion.php  <br>';
if (isset($this->session->username)){
echo 'la var de session username existe  isset true  ';
echo '$this->session->username = ' .$this->session->username;

}
else {
  echo 'la var de session username n existe  PAS  isset false ';
  //il faut proposer au user de se connecter ou de s'inscrire
};

if (!empty($this->session->username)){
  echo 'la var de session username pas vide !empty true  ';
    
  }
  else {
    echo 'la var de session username vide !empty false ';
    //il faut proposer au user de se connecter ou de s'inscrire
  };
  
?>


<h2><?php echo $title; ?></h2>
