<div>

<span><h2><a href="<?php echo site_url('patients/create'); ?>">Add NEW Patient</a></h2></span>
</div>

<br>
<div id="contenairVb">
        <div>
        <table>
         <thead>
                <tr>
                   <th>Nom</th>
                    <th>Prénom</th>
                    <!-- <th>Tél</th> -->
                    <th> </th>
                 </tr>
                </thead>
                <tbody>
         <?php
        //echo 'ici  page arborescence : views/patients/index.php ';
        
        foreach ($patients as $patients_item): ?>
        <!-- <div class="main"> -->
        
                <tr>
                        <td><?= $patients_item['firstname']; ?></td>
                        <td><?= $patients_item['lastname']; ?></td>
                        <!-- <td><?php echo $patients_item['phone']; ?></td> -->
                    <!-- <td><?php echo $patients_item['birthdate']; ?></td>
                        <td><?php echo $patients_item['mail']; ?></td> -->
                        <td></td>
                        <td><a href="<?= site_url('patients/'.$patients_item['id']); ?>">détails</a></td>
                </tr>
        <?php endforeach; ?>
        
                </tbody>
                <tfoot><tr>  <td colspan="5"> ------------------  </td></tr>
                <tr>  <td colspan="5"> nombre de patients <?= $total ?> </td>
                </tfoot></tr>
        
              </table>
              </div>
              <div style="text-align:center;padding-left:20px;padding-bottom:20px;">
              <img src="<?php echo base_url();?>application/assets/img/patient.png" width="250px" /></img>
              </div>
</div>
  </section>

