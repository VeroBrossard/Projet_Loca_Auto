<div>

<span><h2><a href="<?php echo site_url('users/create'); ?>">Add NEW USER</a></h2></span>
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
        //echo 'ici  page arborescence : views/users/index.php ';
        
        foreach ($users as $users_item): ?>
        <!-- <div class="main"> -->
        
                <tr>
                        <td><?= $users_item['u_firstname']; ?></td>
                        <td><?= $users_item['u_lastname']; ?></td>
                        <!-- <td><?php echo $users_item['u_phone']; ?></td> -->
                    <!-- <td><?php echo $users_item['u_birthdate']; ?></td>
                        <td><?php echo $users_item['u_mail']; ?></td> -->
                        <td></td>
                        <td><a href="<?= site_url('users/'.$users_item['u_id']); ?>">détails</a></td>
                </tr>
        <?php endforeach; ?>
        
                </tbody>
                <tfoot><tr>  <td colspan="5"> ------------------  </td></tr>
                <tr>  <td colspan="5"> nombre d'inscrits <?= $total ?> </td>
                </tfoot></tr>
        
              </table>
              </div>
              <div style="text-align:center;padding-left:20px;padding-bottom:20px;">
              <img src="<?php echo base_url();?>application/assets/img/user.png" width="250px" /></img>
              </div>
</div>
  </section>

