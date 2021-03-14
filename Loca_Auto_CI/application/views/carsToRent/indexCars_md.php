</section>
<br>
<section>
        <h1>Voir toutes les voitures à louer</h1>

        <div class="contenairCars">

                        <div>
                                <img id="imgLogoCar" src="<?= base_url('assets/img/cars/voiture.jpg'); ?>" alt="Logo LOCA-AUTO">
                                <p>depuis indexCars.php ************</p>
                                <?= $title ?>
                        </div>
                        <div>

                                <?php
                                //echo 'ici  page arborescence : views/users/index.php ';

                                foreach ($carsToRent as $cars_item) :
                                ?>
                                        <!-- <div class="main"> -->

                                        <!-- <tr> -->
                                        <div class="block">
                                                <div class="flip-box">
                                                        <div class="flip-box-inner">
                                                                <div class="flip-box-front" style="background-image: url(" <?php echo base_url("assets/img/"); ?>voiture.jpg")" width="270px">
                                                                        <h2>Front Side</h2>
                                                                       <img src="<?= base_url('assets/img/cars/'); ?>voiture.jpg" alt="Logo LOCA-AUTO" width="200px"><br>

                                                                        <?= $cars_item['ctr_gamme']; ?>
                                                                        <?= $cars_item['cd_brandSerie']; ?>
                                                                        <?= $cars_item['cd_type']; ?>
                                                                        <?= $cars_item['cd_seats']; ?>
                                                                        <?= $cars_item['cd_energy']; ?>
                                                                        <?= $cars_item['cd_gearbox']; ?>
                                                                        <?= $cars_item['ctr_img']; ?>
                                                                </div>
                                                                <div class="flip-box-back">
                                                                        <h2>Back Side</h2>
                                                                        coucou derriere
                                                                        <?= $cars_item['ctr_km']; ?>
                                                                        <?= $cars_item['ctr_year']; ?>
                                                                        <?= $cars_item['ctr_pricePerDay']; ?>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <?php
                                        if (!empty($_SESSION['ACCES']) && ($_SESSION['ACCES'] == 'Admin' || $_SESSION['ACCES'] == 'Employé')) {
                                                //   *** Admin ou employé connecté
                                        ?>
                                        <td><?= $cars_item['ctr_immatriculation']; ?></td>
                                        <td><?= $cars_item['ctr_toArchive']; ?></td>
                                        <td><?= $cars_item['cd_mileage']; ?></td> -->

                                        <!-- <td><a href="<?= site_url('users/' . $cars_item['u_id']); ?>">détails</a></td> -->
                                        <!-- </tr> -->
                                <?php 
                                        }
                        endforeach; ?>

                                <td colspan="7"> nombre de voitures <?= $total ?> </td>

                        </div>
                
        </div>
</section>