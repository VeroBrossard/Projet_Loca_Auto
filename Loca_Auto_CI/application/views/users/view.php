<?php
//echo 'ma page arborescence : views/users/view.php ';
echo ' depuis view.php users par id <br><br><br>';
echo 'id user = ' .$users_item['u_id']. "<br>";
?>
<table >
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Tél</th>
      <th>date naissance</th>
      <th>email</th>
    </tr>
  </thead>
  <tr>
  <td> <?= $users_item['u_lastname']; ?></td>
  <td><?= $users_item['u_firstname']?></td>
  <td><?=  $users_item['u_phone']; ?></td>
  <td><?= $users_item['u_birthdate']; ?></td>
  <td><?= $users_item['u_mail']; ?></td>
  </tr>
  <tr><td colspan="5" height="20px"></td></tr>
  <tfoot>
    <tr>    
    <td colspan="3"  style="text-align:right;"><a class="bouton" href="<?php echo site_url('users/delete_1user/'.$users_item['u_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir supprimer ce user ?');" >Supprimer</a> </td>
      
    <td colspan="2" ><a class="bouton" href="<?php echo site_url('users/create/'.$users_item['u_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier ce user ?');" >Modifier</a>
  </td>
</tr>

</tfoot>

  <tbody>
</table>
