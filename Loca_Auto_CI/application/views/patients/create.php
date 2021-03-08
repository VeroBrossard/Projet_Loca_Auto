<?php
//hello();
// $id ='';
// $lastname ='';
// $firstname ='';
// $birthdate ='';
// $phone ='';
// $mail ='';
// $action = form_open('users/create');
// $value_button = "Create users item";
// //echo 'ma page arborescence : views/users/view.php ';
if (!empty($users_item['id'])) {
    
 echo 'id user = ' .$users_item['id']. "<br>";
 echo 'modification possible !.... <br>';
//     //$id = $users_item['id'];
//     //$lastname = $users_item['lastname'];
//     $firstname = $users_item['firstname'];
//     $birthdate = $users_item['birthdate'];
//     $phone = $users_item['phone'];
//     $mail = $users_item['mail'];

//     $action = form_open('users/create/'.$users_item['id']);
//     $value_button = "Modify users item";
 }
echo ' depuis create.php users par id <br><br><br>';
?>


<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<!-- <?= $action; ?>  -->
<?= !empty($users_item['id']) ? form_open('users/create/'.$users_item['id']) : form_open('users/create'); ?>
<!-- , array('onsubmit' => "return confirm('Etes vous sûr de valider?')" ) -->

<!-- //pour choix action  -->
     <input type="hidden" name="id" value="<?= !empty($users_item['id']) ? $users_item['id'] : '' ?>"/>

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" value="<?= !empty($users_item['id']) ? $users_item['lastname'] : '' ?>"/><br /><br />

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="<?= !empty($users_item['id']) ? $users_item['firstname'] : '' ?>"/><br /><br />

    <label for="birthdate">Dte naissance</label>
    <input type="date" name="birthdate" value="<?= !empty($users_item['id']) ? $users_item['birthdate'] : '' ?>"/><br /><br />

    <label for="phone">Tel</label>
    <input type="tel" name="phone" value="<?= !empty($users_item['id']) ? $users_item['phone'] : '' ?>"/><br /><br />
    
    <label for="email">mail</label>
    <input type="email" name="mail" value="<?= !empty($users_item['id']) ? $users_item['mail'] : '' ?>"/><br /><br />

    <input type="submit" name="submit" value="<?= !empty($users_item['id']) ? "Modify users item" : "Create users item" ?>" /><br />


    
</form>

<!-- La méthode confirm() affiche une boîte de dialogue avec un message et deux boutons (OK et Annuler). Cette méthode renvoie true si l’utilisateur clique sur OK, sinon false. -->
<!-- <script> 
function confirmer(){
var res = confirm("Êtes-vous sûr de vouloir supprimer?");
if(res){
    // Mettez ici la logique de suppression
}
}
 </script> -->

<!-- <script type="text/javascript">

function confirmvb()
{
rep = confirm('Etes vous sûr de valider?');
 
if(rep)
{ // SI LA PERSONNE A APPUYER SUR OUI
 return true;
}
else
{ // SI LA PERSONNE N'A PAS APPUYER SUR OUI
return false;
}
 
}

</script> -->
