<style>
li{
  display : inline; /* C'est à l'aide de cette propriété que tout se "joue" */
    padding : 0px 5px; /* On espace les élements */
    list-style : none; /* Sinon, les puces vont n'importe où */
} 
</style>

<?php
echo "title" . $title ."<br>";
//var_dump($car_items);
if (!empty($car_items['ctr_id'])) {
    
 echo 'id car = ' .$car_items['ctr_id']. "<br>";
 echo 'modification possible !.... <br>';
 //$details= $this->carsToRent_model->researchDetails_md($car_items['ctr_id']);//
 var_dump($car_items);
 }
 else {
  echo 'modification impossible  pb de id!.... <br>';
 }
echo ' depuis gestion/formPrModifCar.php par id <br><br><br>';
?>

<div style="display:flex; justify-content:space-around;">
  
  <div style="width:30vw;background-color:antiquewhite;padding:2vw;">
    <h2><?php echo $title; ?></h2>
    
    <?php echo validation_errors(); ?>
    
    <?= !empty($car_items['ctr_id']) ? form_open('carsToRent/modifyORcreate/'.$car_items['ctr_id']) : form_open('carsToRent/modifyORcreate/'); ?>
    <!-- , array('onsubmit' => "return confirm('Etes vous sûr de valider?')" ) -->
    
    <label for="cd_id"> cd_id code details</label>
<input type="number" name="cd_id" value="<?= !empty($car_items['ctr_id']) ? $car_items['cd_id'] : '' ?>" style="width:50px;" />A finir<br /><br />
        <!-- //affichage des details technique de la voiture d'apres carDetails -->

        <label for="infos">Infos modéle</label><br>
       <?= !empty($car_items['ctr_id']) ?  $car_items['cd_brandSerie'] .' ('. $car_items['cd_type'] . ') ' .$car_items['cd_seats'] .'sièges, boite ' .$car_items['cd_gearbox'] . ' '. $car_items['cd_energy'] : '' ?> <br /><br />
       <label for="modele"> MODELE:</label><br>
            <select type="text" name="modele" id="modele" width="150" title="MODELE" style="width:450px; font-size:11px;">
            <?php
        if (!empty($modeles)){
                    foreach ($modeles as $modele_items) :
                    ?>
           
                    <option value="<?= $modele_items['cd_id'] ?>"
                    <?= ($modele_items['cd_id']  == $car_items['cd_id'])? "selected": '' ?>  > 
                    code<?= $modele_items['cd_id'] ?>
                    <?= $modele_items['cd_brandSerie'] ?>
                    <?= $modele_items['cd_type'] ?>
                    <?= $modele_items['cd_seats'] ?> pl., bte 
                    <?= $modele_items['cd_gearbox'] ?>
                    <?= $modele_items['cd_energy'] ?>
                    <?= $modele_items['ctr_gamme'] ?>
                  <!-- <?= $modele_items['cd_toArchive'] ?> -->
                  
                  </option>
                    <?php
                    endforeach;
                  }
                    ?>
            </select> <br><br>
            
            
            <input type="hidden" name="id" value="<?= !empty($car_items['ctr_id']) ? $car_items['ctr_id'] : '' ?>"/><br>
            
            <img id="imgLogoGamme" src="<?= base_url('assets/img/logo/gammes.png'); ?>" alt="Logo gammes"><br><br>
            
            <img id="imgCar" src="<?= base_url('assets/img/cars/' .$car_items['ctr_img']); ?>" alt="photo car"  style="width:220px; float:right;">
        <label for="gamme"> GAMME:</label>
            <select type="text" name="gamme" id="gamme" width="15" title="GAMME" style="width:80px;">
                    <?php
                    foreach ($gammes as $gamme_items) :
                    ?>
                    <option value="<?= $gamme_items['ctr_gamme'] ?>"
                    <?= ($gamme_items['ctr_gamme']  == $car_items['ctr_gamme'])? "selected": '' ?>  > <?= $gamme_items['ctr_gamme'] ?> </option>
                    <?php
                    endforeach;
                    ?>
            </select> <br><br>

                    
        <label for="immatriculation">immatriculation</label>
        <input type="text" name="immatriculation" value="<?= !empty($car_items['ctr_id']) ? $car_items['ctr_immatriculation'] : '' ?>" style="width:80px;" /><br /><br />
    
        <label for="pricePerDay"> pricePerDay</label>
        <input type="number" name="pricePerDay" value="<?= !empty($car_items['ctr_id']) ? $car_items['ctr_pricePerDay'] : '' ?>" style="width:80px;" /><br /><br />
    
        <label for="km"> km voiture</label>
        <input type="number" name="km" value="<?= !empty($car_items['ctr_id']) ? $car_items['ctr_km'] : '' ?>" style="width:80px;" /><br /><br />
    
        <label for="year"> année</label>
        <input type="number" name="year" value="<?= !empty($car_items['ctr_id']) ? $car_items['ctr_year'] : '' ?>" style="width:80px;" /><br /><br />
    
        <label for="img"> Photo</label><br>
        <input type="text" name="img" value="<?= !empty($car_items['ctr_id']) ? $car_items['ctr_img'] : '' ?>" style="width:200px;font-size: 10px;" /><br /><br />
    
     A Archiver ?
        
                    <input type="radio" id="non" name="toArchive" value="0" <?= ($car_items['ctr_toArchive']) == "0" ? "checked" : '' ?> >
                    <label for="non">Non</label>

                    <input type="radio" id="oui" name="toArchive" value="1" <?= ($car_items['ctr_toArchive']) == "1" ? "checked" : '' ?> >
                    <label for="oui">Oui</label>
    
                    <br /><br />

        <input type="submit" name="submit" class="bouton" value="<?= !empty($car_items['ctr_id']) ? "Modify CAR item" : "Create CAR item" ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture ?');"  /> <br />

        <!-- <a class="bouton" href="<?php echo site_url('carsToRent/modify/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture ?');" >Modifier</a>
      
      'onsubmit="return confirm(\'Etes-vous sur de votre choix ?\');"'-->
    
    <?php hello(); ?>
    
    </form>
  </div>
  <div style="width:40vw;background-color:antiquewhite;padding:2vw;">
  nouvelle div pour TABLE  carDetails voiture  <BR>
  <?php
  //var_dump($modeles);
//echo " (_modele_items['cd_id'] = " . $modeles['carDetails.cd_id'] . "<br>";
echo " (_car_items['cd_id'] = " . $car_items['cd_id'] . "<br>";
?>
  <form>

  
    </form>

</div>