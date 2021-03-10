</section>
<br>
<section>
        <?= $title ?>
        <div class="contenairCars">
                <div>
                        <p>depuis form_locationsSearch.php ************</p>
                </div>
                <div>
                                        <!-- <th>immat.</th>
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
                                                <th>mileage</th> -->


                        <form action="/ma-page-de-traitement" method="post">

                                <select name="gamme" id="gamme_select" required>
                                        <option value="">Gamme</option>

                                        <?php
                                        foreach ($locations as $cars_item) : ?>
                                         <option value=" <?= $cars_item['ctr_gamme']; ?>"> <?= $cars_item['ctr_gamme']; ?></option>
                                        <?php endforeach; ?>
                                </select>

                                <div class="button">
                                        <button type="submit">Voir le devis</button>
                                </div>

                        </form>

                        <?php
                        foreach ($locations as $cars_item) : ?>
                            
                                        
                                
                                        <!-- <td><?= $cars_item['ctr_immatriculation']; ?></td>
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
                                                        <td><?= $cars_item['cd_mileage']; ?></td> -->

                             
                        <?php endforeach; ?>

                       nombre de gamme <?= $total ?> 
    
                </div>
                <!-- <div style="text-align:center;padding-left:20px;padding-bottom:20px;">
              <img src="<?php echo base_url(); ?>application/assets/img/user.png" width="250px" /></img>
              </div> -->
        </div>
</section>