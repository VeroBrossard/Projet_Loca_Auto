</section>
<br>
<section>
        <div id="contenairCars">
        <div>
        <p>depuis indexCars.php ************</p>
        <?= $title ?>
        </div>
        <div>
        <table>
         <thead>
                <tr>
                   <th>gamme</th>
                   <th>immatriculation</th>
                    <th>pricePerDay</th>
                    <th>kmetrage</th>
                    <th>year</th>
                    <th>img</th>
                    <th>to_archive</th>
                 </tr>
                </thead>
                <tbody>
         <?php
        //echo 'ici  page arborescence : views/users/index.php ';
        
        foreach ($carsToRent as $cars_item): ?>
        <!-- <div class="main"> -->
        
                <tr>
                        <td><?= $cars_item['ctr_gamme']; ?></td>
                        <td><?= $cars_item['ctr_immatriculation']; ?></td>
                        <td><?= $cars_item['ctr_pricePerDay']; ?></td>
                        <td><?= $cars_item['ctr_km']; ?></td>
                        <td><?= $cars_item['ctr_year']; ?></td>
                        <td><?= $cars_item['ctr_img']; ?></td>
                        <td><?= $cars_item['ctr_toArchive']; ?></td>
                     
                        <!-- <td><a href="<?= site_url('users/'.$cars_item['u_id']); ?>">détails</a></td> -->
                </tr>
        <?php endforeach; ?>
        
                </tbody>
                <tfoot><tr>  <td colspan="7"> ------------------  </td></tr>
                <tr>  <td colspan="7"> nombre de voitures <?= $total ?> </td>
                </tfoot></tr>
        
              </table>
              </div>
              <!-- <div style="text-align:center;padding-left:20px;padding-bottom:20px;">
              <img src="<?php echo base_url();?>application/assets/img/user.png" width="250px" /></img>
              </div> -->
</div>
  </section>
