</section>
<br>
<section>
        <h1>Nos voitures </h1>

        <div class="contenairCars">

                <!-- <div>
                                <img id="imgLogoCar" src="<?= base_url('assets/img/cars/voiture.jpg'); ?>" alt="Logo LOCA-AUTO">
                                <p>depuis indexCars.php ************</p>
                                <?= $title ?>
                        </div> -->
                <div>

                        <?php

                        foreach ($carsToRent as $cars_item) :
                        ?>
                                <div class="block">
                                        <div class="flip-box">
                                                <div class="flip-box-inner">
                                                        <div class="flip-box-front" >
                <!-- style="background-image: url(" <?php echo base_url("assets/img/"); ?>voiture.jpg")" width="270px" -->
                                                        <?= $cars_item['cd_brandSerie']; ?><br>
                                                              <img class="carCard" src="<?= base_url('assets/img/cars/'); ?><?= $cars_item['ctr_img']; ?>" alt="car LOCA-AUTO" ><br>

                                                         
           <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>seats.jpg" alt="car LOCA-AUTO" > <?= $cars_item['cd_seats']; ?>
         <?php
           if ( $cars_item['cd_energy'] == 'Diesel'){
          ?>
            <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>gasoil.jpg" alt="car LOCA-AUTO" >
        <?php
        }
        if ( $cars_item['cd_energy'] == 'Electrique'){
         ?>  
        <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>electric.jpg" alt="car LOCA-AUTO" >  
        <?php
        }

        if ( $cars_item['cd_energy'] == 'Essence'){
                
        ?>  
               <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>essence.jpg" alt="car LOCA-AUTO" >  
        <?php
        }
               
        ?>                                  
                                <?= $cars_item['cd_energy']; ?>

 <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>gearbox.jpg" alt="car LOCA-AUTO" >                     

                                <?= $cars_item['cd_gearbox']; ?>
                                                                
                                                        </div>
                                                        <div class="flip-box-back"><br>

                                                                <?= $cars_item['cd_type']; ?><br><br>
                                                                <?= $cars_item['ctr_gamme']; ?><br>
                                                                de <?= $cars_item['ctr_year']; ?>
                                                                avec <?= $cars_item['ctr_km']; ?>km <br>
                                                                à partir de  <?= $cars_item['ctr_pricePerDay']; ?> €/jr.
                                                        </div>
                                                </div>
                                        </div>
                                </div>
<?php
                        endforeach; 
                        ?>

                        <td colspan="7"> nombre de voitures <?= $total ?> </td>

                </div>

        </div>
</section>