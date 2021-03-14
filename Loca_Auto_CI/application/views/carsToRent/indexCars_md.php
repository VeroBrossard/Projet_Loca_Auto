</section>
<br>
<section>
        <h1>Voir toutes les voitures à louer</h1>
        <div>
                <div class="flip-box">
                        <div class="flip-box-inner">
                                <div class="flip-box-front">
                                        <h2>Front Side</h2>
                                        cooucou devant
                                </div>
                                <div class="flip-box-back">
                                        <h2>Back Side</h2>
                                        coucou derriere
                                </div>
                        </div>
                </div>
        </div>
        <div class="contenairCars">
                <div>
                        <p>depuis indexCars.php ************</p>
                        <?= $title ?>
                </div>
                <div>
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
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                        //echo 'ici  page arborescence : views/users/index.php ';

                                        foreach ($carsToRent as $cars_item) : ?>
                                                <!-- <div class="main"> -->

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

                                                        <!-- <td><a href="<?= site_url('users/' . $cars_item['u_id']); ?>">détails</a></td> -->
                                                </tr>
                                        <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                        <tr>
                                                <td colspan="7"> ------------------ </td>
                                        </tr>
                                        <tr>
                                                <td colspan="7"> nombre de voitures <?= $total ?> </td>
                                </tfoot>
                                </tr>

                        </table>
                </div>
                <!-- <div style="text-align:center;padding-left:20px;padding-bottom:20px;">
              <img src="<?php echo base_url(); ?>application/assets/img/user.png" width="250px" /></img>
              </div> -->
        </div>
</section>