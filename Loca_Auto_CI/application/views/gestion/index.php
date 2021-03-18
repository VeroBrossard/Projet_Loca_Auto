<!DOCTYPE html>
<html lang="fr">
<head>
<?php 
  //gammes
//include()
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
<h2>Accordion</h2>

<button class="accordion">Locations</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Voitures</button>
<div class="panel">
<?php
//echo 'ma page arborescence : views/patients/view.php ';
// hello();
// var_dump($carsToRent);
echo ' depuis listeCarspourGestion.php /// 1car par id <br><br><br>';
// echo 'id voiture = ' .$cars_item['ctr_id']. "<br>";


?>
<table>
                                <thead>
                                        <tr>
                                                <th>gamme</th>
                                                <th>immat.</th>
                                                <th>€/jr</th>
                                                <th> km </th>
                                                <th>year</th>
                                                <th>img</th>
                                                <th>arch?</th>
                                                <th>Marque</th>
                                                <th>type</th>
                                                <th>seats</th>
                                                <th>gearbox</th>
                                                <th>energy</th>
                                                <th>mileage</th>
                                                <th>Modifier</th>
                                                <th>Supprimer</th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php

foreach ($carsToRent as $cars_item) :
?>
                        <tr>
                                <td><?= $cars_item['ctr_gamme']; ?></td>
                                <td><?= $cars_item['ctr_immatriculation']; ?></td>
                                <td><?= $cars_item['ctr_pricePerDay']; ?></td>
                                <td><?= $cars_item['ctr_km']; ?></td>
                                <td><?= $cars_item['ctr_year']; ?></td>
                                <td><?= $cars_item['ctr_img']; ?></td>
                                <td><?= $cars_item['ctr_toArchive']; ?></td>
                                <td><?= $cars_item['cd_brandSerie']; ?></td>
                                <td><?= $cars_item['cd_type']; ?></td>
                                <td><?= $cars_item['cd_seats']; ?></td>
                                <td><?= $cars_item['cd_gearbox']; ?></td>
                                <td><?= $cars_item['cd_energy']; ?></td>
                                <td><?= $cars_item['cd_mileage']; ?></td>
                                <!-- <td><a href="<?= site_url('mysession/view_1car/' . $cars_item['ctr_id']); ?>">détails</a></td>                                                 -->
                        </tr>
   <?php

endforeach ;
?>
                                </tbody>
 
                                <tr><td colspan="14" height="20px"></td></tr>
                                <tfoot>
                                  <tr>    
                                  <td colspan="7"  style="text-align:right;"><a class="bouton" href="<?php echo site_url('carsToRent/delete_1carToRent/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir supprimer cette voiture ?');" >Supprimer</a> </td>
                                    
                                  <td colspan="7" ><a class="bouton" href="<?php echo site_url('carsToRent/create/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture ?');" >Modifier</a>
                                </td>
                              </tr>
                              
                              </tfoot>

                        </table>
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
