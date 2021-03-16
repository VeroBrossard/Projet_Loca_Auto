</section>
<br>

<section>
<h1>Voir une voiture en particulier </h1>

<div >
    <!-- <div style="text-align: center"> -->
    <?= form_open('carsToRent/view_1Car') ?>

         <label for="uimmatriculation">Choose a car by immatriculation:</label><br>
        <select id="uimmatriculation" name="uimmatriculation" style="width: 500px;background-color:gold;">
          <!--  **** faire requete sur immat ici -->
          <?php foreach ($carsToRent as $cars_item) : ?>
          <option value="<?= $cars_item['ctr_immatriculation']; ?>"> id(<?= $cars_item['ctr_id']; ?>) --  <?= $cars_item['cd_brandSerie']; ?> -- <?= $cars_item['cd_type']; ?>  --  <?= $cars_item['ctr_immatriculation']; ?></option>
          <?php endforeach; ?>

        </select>




        <!-- <input type="text" placeholder="Entrez votre NOM" name="uname" required><br>
        <p><?php echo form_error('uname'); ?></p><br />
        <label for="uphone"><b>Téléphone </b><i>(10 chiffres)</i></label><br>
        <input type="text" placeholder="Entrez votre n° de téléphone" name="uphone" required><br>
        <p><?php echo form_error('uphone'); ?></p>
        <label for="upwd"><b>Password</b></label><br>
        <input type="password" placeholder="Entrez Mot de passe" name="upwd" required><br>
        <p><?php echo form_error('pwd'); ?></p>
         -->
        <button type="submit">Afficher</button>

    </div>

    </form>


    <!-- *********************  a finir   ******* -->
    <!-- <a href="<?= site_url('carsToRent/view_1car/' . $cars_item['ctr_id']); ?>">détails</a> -->

    </section>
<section>
        <h1>Voir toutes les voitures à louer</h1>
        <div class="contenairCars">
                <!-- <div>
                        <p>depuis indexCars.php ************</p>
                        <?= $title ?>
                </div> -->
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
                                                <th>Modifier</th>
                                                <th>Supp/Arch</th>
                                                <th>Détails</th>
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
                                                  <td><a class="bouton" href="<?php echo site_url('carsToRent/create/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture ?');" >Modifier</a>
                                                </td>
                                                  <td ><a class="bouton" href="<?php echo site_url('carsToRent/delete/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir archiver (supprimer) cette voiture ?');" >Supprimer</a> </td>
      
                                                  <td><a href="<?= site_url('carsToRent/view_1car/' . $cars_item['ctr_id']); ?>">détails</a></td>                                                
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