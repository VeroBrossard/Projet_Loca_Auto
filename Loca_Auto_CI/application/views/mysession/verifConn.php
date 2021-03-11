</section>
<br>
<section>
        <div >titre depuis data ??
          <?= $title ?>
                <div>verif conn.php   appel depuis  mySession************</p>
                var_dump de $users
               <?php
                var_dump($users);
if(empty($users)){

  echo "il y a un pb , vous semblez n'être pas inscrit <br>
  
  pwd oublié ??<br>";
}
else{


                echo 'id patient = ' .$users['u_id']. "<br>";
                echo 'count= ' .count($users). "<br>";
                ?>
                </div>
                <div>
                        <table>
                                <thead>
                                        <tr>

                                                <th>id</th>
                                                <th>nom.</th>
                                                <th>€/prenom</th>
                                                <th> mail </th>
                                                <th>pwd</th>
                                                <th>tel</th>
                                                <th>arch?</th>
                                                <th>a archiver</th>
                                                <th>Date de N</th>
                                                <th>fonction</th>

                                        </tr>
                                </thead>
                                <tbody>


                                                <tr>
                                                        <td><?= $users['u_id']; ?></td>
                                                        <td><?= $users['u_lastname']; ?></td>
                                                        <td><?= $users['u_firstname']; ?></td>
                                                        <td><?= $users['u_mail']; ?></td>
                                                        <td><?= $users['u_pwd']; ?></td>
                                                        <td><?= $users['u_phone']; ?></td>
                                                        <td><?= $users['u_toArchive']; ?></td>
                                                        <td><?= $users['u_birthdate']; ?></td>
                                                        <td><?= $users['u_fonction']; ?></td>


                                                </tr>


                                </tbody>
                                <tfoot>
                                        <tr>
                                                <td colspan="7"> ------------------ </td>
                                        </tr>
                                        <tr>
                                                <td colspan="7"> nombre de champs <?= count($users) ?> </td>
                                </tfoot>
                                </tr>

                        </table>
                </div>
                <!-- <div style="text-align:center;padding-left:20px;padding-bottom:20px;">
              <img src="<?php echo base_url(); ?>application/assets/img/user.png" width="250px" /></img>
              </div> -->
        </div>
</section>
<?php
}
?>