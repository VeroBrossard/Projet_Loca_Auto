<!-- <a href="#id02">Ouvrir la fenêtre modale</a> -->
depuis modale_create.php avec id02<br>
<mark><a href="#id02">Ouvrir la fenêtre modale id02</a></mark>
<div id="id02" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <header id="headerMD" class="containerMD"> 
        <a href="#" class="closebtnMD">×</a>
        <h2>Entête de modale</h2>
      </header>
      <div class="containerMD">
        <p>Texte dans la fenêtre modale.</p> 
        <div style="text-align: center" >
        par modale_create.php<br>
<?php
        if (!empty($users_item['u_id'])) {
    
    echo 'id users = ' .$users_item['u_id']. "<br>";
    echo 'modification possible !.... <br>';
   //     //$id = $users_item['u_id'];
   //     //$lastname = $users_item['u_lastname'];
   //     $firstname = $users_item['u_firstname'];
   //     $birthdate = $users_item['u_birthdate'];
   //     $phone = $users_item['u_phone'];
   //     $mail = $users_item['u_mail'];
   
   //     $action = form_open('users/create/'.$users_item['u_id']);
   //     $value_button = "Modify users item";
    }
   echo ' depuis modale_create.php users par id 02<br><br><br>';
   ?>
   
   
   <!-- <h2><?php echo $title; ?></h2> -->
   
   <?php echo validation_errors(); ?>
   
   <!-- <?= $action; ?>  -->
   <?= !empty($users_item['u_id']) ? form_open('users/create/'.$users_item['u_id']) : form_open('users/create'); ?>
   <!-- , array('onsubmit' => "return confirm('Etes vous sûr de valider?')" ) -->
   
   <!-- //pour choix action  -->
        <input type="hidden" name="id" value="<?= !empty($users_item['u_id']) ? $users_item['u_id'] : '' ?>"/>
   
        <label for="toArchive">toArchive ?? </label>
       <input type="toArchive" name="toArchive" value="<?= !empty($users_item['u_id']) ? $users_item['u_toArchive'] : '' ?>"/><br /><br />
       <!--voir  validation en HTML : https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation -->
   
       <label for="lastname">Nom</label>
       <input type="text" name="lastname" value="<?= !empty($users_item['u_id']) ? $users_item['u_lastname'] : '' ?>"/><br /><br />
   
       <label for="firstname">Prénom</label>
       <input type="text" name="firstname" value="<?= !empty($users_item['u_id']) ? $users_item['u_firstname'] : '' ?>"/><br /><br />
   
       <label for="birthdate">Dte naissance</label>
       <input type="date" name="birthdate" value="<?= !empty($users_item['u_id']) ? $users_item['u_birthdate'] : '' ?>"/><br /><br />
   
       <label for="phone">Tel</label>
       <input type="tel" name="phone" value="<?= !empty($users_item['u_id']) ? $users_item['u_phone'] : '' ?>"/><br /><br />
       
       <label for="email">mail</label>
       <input type="email" name="mail" value="<?= !empty($users_item['u_id']) ? $users_item['u_mail'] : '' ?>"/><br /><br />
   
       <label for="pwd">password</label>
       <input type="password" name="pwd" value="<?= !empty($users_item['u_id']) ? $users_item['u_pwd'] : '' ?>"/><br /><br />
       
   
       <input type="submit" name="submit" value="<?= !empty($users_item['u_id']) ? "Modify users item" : "Create users item" ?>" /><br />
   
   
       
   </form>
        <!-- <?= form_open('users/create') ?>
           i/o  <form action="<?php echo site_url('mysession/add') ?>" method="post">
                <input type="text" placeholder="Enter Name" name="uname">
                <input type="pwd" placeholder="Enter pwd" name="upwd">
                <button type="submit">Set Name</button>
            </form> -->




        </div> 
      </div>
      <footer  id="footerMD" class="containerMD">
        <p>Pied de page de modale</p>
      </footer>
    </div>
  </div>
</div> 