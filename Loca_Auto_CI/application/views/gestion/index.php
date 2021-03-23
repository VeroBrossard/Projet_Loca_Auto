<!DOCTYPE html>
<html lang="fr">
<head>
<?php 
  //gammes
//include(listeCarsPourGestion)
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</head>
<body>
  <?php 
  //gammes
  // echo "vardump dataLocations/carsToRent ******************";
  // var_dump($carsToRent);
  // echo "<br>";
//   echo "vardump dataLocations/locations ******************";
// var_dump($locations);
// echo "<br>";
  ?>
  <section>
  <div>.autant que necessaire ... echo de title <?= $title ?><br></div>
head a supprimer... c'est dans le header><br>
depuis gestion/index.php <br>
<h2>Accordion</h2>

<button class="accordion">Locations</button>
<div class="panel">
<?php
//echo 'ma page arborescence : views/patients/view.php ';
$this->load->view('gestion/listeLocationsPourGestion');
// hello();
// var_dump($carsToRent);
echo ' depuis listeLocationsPourGestion.php /// 1loc par id <br><br><br>'

?>
</div>

<button class="accordion">Voitures</button>
<div class="panel">
  <?php
//echo 'ma page arborescence : views/patients/view.php ';
$this->load->view('gestion/listeCarsPourGestion');
// hello();
// var_dump($carsToRent);
echo ' depuis listeCarspourGestion.php /// 1car par id <br><br><br>';
// echo 'id voiture = ' .$cars_item['ctr_id']. "<br>";
?>                     
</div> 

<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</section>
</body>
</html>
