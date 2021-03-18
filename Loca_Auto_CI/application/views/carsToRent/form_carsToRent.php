<?php

echo ' depuis form_carsToRent.php <br><br>';
echo (isset($essai) ? '<span style="color:red">' . $essai . ' et ' . $ugamme . '</span>' : 'pas de essai');
echo "_vardump _carsToRent";
//var_dump($carsToRent);

echo '<br> errors  or not errorsdans la location... <br>';
echo validation_errors();
echo 'that is the question ??? <br>';


foreach ($carsToRent as $cars_item) :
?>
    <div class="block">
        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <!-- style="background-image: url(" <?php echo base_url("assets/img/"); ?>voiture.jpg")" width="270px" -->
                    <?= $cars_item['cd_brandSerie']; ?><br>

                    <img class="carCard" src="<?= base_url('assets/img/cars/'); ?><?= $cars_item['ctr_img']; ?>" alt="car LOCA-AUTO"><br>
        <!-- // **** pour choix locations dispo -->
                 <?= $cars_item['ctr_id']; ?><br>
                    <?= $cars_item['l_startDate']; ?> à <?= $cars_item['l_endDate']; ?>
                </div>

                <div class="flip-box-back"><br>

                    <?= $cars_item['cd_type']; ?><br><br>
                    <?= $cars_item['ctr_gamme']; ?><br>
                    de <?= $cars_item['ctr_year']; ?>
                    avec <?= $cars_item['ctr_km']; ?>km <br>
                    à partir de <?= $cars_item['ctr_pricePerDay']; ?> €/jr.<br>
                    <br>
                    <!-- //   **** logo sous photos  -->
                    <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>seats.jpg" alt="car LOCA-AUTO"> <?= $cars_item['cd_seats']; ?>
                    <?php
                    if ($cars_item['cd_energy'] == 'Diesel') {
                    ?>
                        <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>gasoil.jpg" alt="car LOCA-AUTO">
                    <?php
                    }
                    if ($cars_item['cd_energy'] == 'Electrique') {
                    ?>
                        <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>electric.jpg" alt="car LOCA-AUTO">
                    <?php
                    }

                    if ($cars_item['cd_energy'] == 'Essence') {

                    ?>
                        <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>essence.jpg" alt="car LOCA-AUTO">
                    <?php
                    } 

                    ?>
                    <?= $cars_item['cd_energy']; ?>

                    <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>gearbox.jpg" alt="car LOCA-AUTO">

                    <?= $cars_item['cd_gearbox']; ?>
                    <!-- //   **** fin logo sous photos  -->
                </div>
            </div>
        </div>
    </div>

<?php
endforeach;
?>