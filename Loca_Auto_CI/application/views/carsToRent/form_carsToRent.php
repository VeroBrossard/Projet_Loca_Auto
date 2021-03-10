<?php

echo ' depuis form_carsToRent.php <br><br>';
?>

<?php 
echo '<br> errors  or not errors... <br>'; 
echo validation_errors(); 
echo 'that is the question ??? ';
 ?> 
 form_carsToRent.php<br>
<?=  form_open('users/create/'.$users_item['u_id']) ?>
<!-- , array('onsubmit' => "return confirm('Etes vous sûr de valider?')" ) -->

<!-- //pour choix action  -->
     <input type="hidden" name="id" value="<?= !empty($users_item['u_id']) ? $users_item['u_id'] : '' ?>"/>

     <label for="toArchive">toArchive ?? </label>
    <input type="text" name="toArchive" value="<?= !empty($users_item['u_id']) ? $users_item['u_toArchive'] : '0' ?>"/><br />


    <label for="fonction">Fonction sur le site</label>
    <input type="text" name="fonction" value="<?= !empty($users_item['u_id']) ? $users_item['u_fonction'] :  (empty(set_value('fonction')) ? 'None' : set_value('fonction')); ?>" size="30" />
    <p><?php echo form_error('fonction'); ?></p><br />

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" value="<?= !empty($users_item['u_id']) ? $users_item['u_lastname'] : set_value('lastname'); ?>" size="30" />
    <p><?php echo form_error('lastname'); ?></p><br />

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="<?= !empty($users_item['u_id']) ? $users_item['u_firstname'] : set_value('firstname'); ?>" size="30" />
    <p><?php echo form_error('firstname'); ?></p><br />

    <label for="birthdate">Date naissance</label>
    <input type="date" name="birthdate" value="<?= !empty($users_item['u_id']) ? $users_item['u_birthdate'] : set_value('birthdate'); ?>"/>
    <p><?php echo form_error('birthdate'); ?></p><br />

    <label for="phone">Tel</label>
    <input type="phone" name="phone" value="<?= !empty($users_item['u_id']) ? $users_item['u_phone'] : set_value('phone');?>" size="10" />
    <p><?php echo form_error('phone'); ?></p><br />
    
    <label for="email">mail</label>
    <input type="email" name="mail" value="<?= !empty($users_item['u_id']) ? $users_item['u_mail'] : set_value('mail');?>" size="50" />
    <p><?php echo form_error('mail'); ?></p><br />

    <label for="pwd">mot de passe</label>
    <input type="password" name="pwd" value="<?= !empty($users_item['u_id']) ? $users_item['u_pwd'] : set_value('pwd'); ?>" size="10" />
    <p><?php echo form_error('pwd'); ?></p><br />
    

    <input type="submit" name="submit" value="<?= !empty($users_item['u_id']) ? "Modify users item" : "Create users item" ?>" onclick="return confirm('Avez-vous rempli tous les champs???');" /><br />
    
</form>


}
