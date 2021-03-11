<?php
echo ' depuis create.php users par id <br><br><br>';

if (!empty($users_item['u_id'])) {
    
 echo 'id users = ' .$users_item['u_id']. "<br>";
 echo 'modification possible !.... <br>';

//     $phone = $users_item['u_phone'];

 }
 else {
 echo " users_item['u_id'] est vide // user non connecté et/ou requete globale <br>";
 echo 'création  possible !.... <br>';
 !empty($users_item['u_id']) ?  "users_item['u_id']  = ". $users_item['u_id'] ."<br>" : "users_item['u_id']  est vide ";
 }

 if (!empty($title)) {
    echo "depuis create.php " .$title.'<br>';
    echo 'dataUser = ' .$title. "<br>";

    // echo "var_dump dataUser  version 2";
    // var_dump($dataUser);
   
    echo "var_dump session->userdata";
    var_dump($this->session->userdata);
    // echo "var_dump userdata";
    // var_dump($userdata);

// foreach ($userdata as $session_item)
// echo $session_item ;
// endforeach;



echo '****$this->session->username = ' . $this->session->username . '<br>';

echo 'session paramétrée  !.... <br>';
    echo 'session paramétrée  !.... <br>';
   
 
    }
    else {
    echo " dataUser  est vide // user non connecté <br>";
  
    }
 

?>
<?php
    echo '<br> errors  or not errors... <br>';
    echo validation_errors();
    echo 'that is the question ??? ';


    echo "set_value('fonction')=  " .set_value('toArchive')."<br>"; 
    var_dump(set_value('toArchive'));
    var_dump($_POST);
     ?>
<section id="form_section">
    <?php if (isset($this->session->username)) {
             // echo 'session ok  client authentifié =  <br>';
             echo 'cconnexion ok <br>';
        echo '$this->session->username = ' . $this->session->username . '<br>';
     ?>
      <h1>Welcome <?php echo $this->session->userdata('username'); ?></h1>
   <h2>Formulaire de modification </h2><br>
    <?php
     } else {
    echo 'PAS de session username <br>'; 
  ?>
    <h2>Formulaire d'inscription</h2><br>
    <?php
    };
   ?>
    
    <!-- <h2> comm depuis create.php <?php echo $comm; ?></h2> -->

    
    <?= !empty($users_item['u_id']) ? form_open('users/create/'.$users_item['u_id']) : form_open('users/create'); ?>
    
<?php
if( isset($users_item['u_fonction']) && (($users_item['u_fonction'])== ("Admin" || "Employé" || ''))) 
{

    echo "users_item['u_fonction'] =" .$users_item['u_fonction'] . "<br>";
    ?>
    <!-- *******   partie admin  *********    -->
    <!-- //pour choix action  autorisées-->
    <input type="hidden" name="id" value="<?= !empty($users_item['u_id']) ? $users_item['u_id'] : '' ?>"/>
    <!-- //pour archivage ou pas eq supprssion-->
    <div class="form_div" style="border:2px;">



      A&nbsp;archiver&nbsp;? 

        <input type="radio" id="Non" name="toArchive" 
        value = "0" <?= (!empty($users_item['u_id']) && ($users_item['u_toArchive'] != "TRUE") )
        || (set_value('toArchive') != "1" ) 
        || (set_value('toArchive') == '' ) 
        || (empty(set_value('fonction'))) ? 'checked' : '' ?> "> 
        <label for="Non">Non</label>
    
        <input type="radio" id="Oui" name="toArchive" 
        value="1" <?= (!empty($users_item['u_id']) && ($users_item['u_toArchive'] == "TRUE")) || (set_value('toArchive') == "1" ) ? "checked" : '' ?>"> <label for="Oui">Oui</label>
      </div>
    <br />
    
    <div class="form_div">    
    <span><label for="fonction"> Fonction sur le site : <br> <i>"Admin, Employé ou None" : </i></label></span>
    <span><input type="text" style="width:100px;" name="fonction" pattern="[Em]ployé|[Aa]dmin|[Nn]one" value="<?= !empty($users_item['u_id']) ? $users_item['u_fonction'] :  (empty(set_value('fonction')) ? 'None' : set_value('fonction')); ?>" size="30" /></span>
    </div>
    <p><?php echo form_error('fonction'); ?></p><br />
    <?php
}
else { //connecté pas ADMIN{
?> 

    
    <p><i>Complétez le formulaire. Tous les champs sont <em>obligatoires</em></p>
    <fieldset>
    <legend>Vos infos:</legend>
    
            <label class="label_form" for="lastname">Nom</label>
            <input type="text" name="lastname" placeholder="ex: DUPONT" autofocus="" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_lastname'] : set_value('lastname'); ?>" size="30" />
            <p><?php echo form_error('lastname'); ?></p><br />
    
            <label class="label_form" for="firstname">Prénom</label>
            <input type="text" name="firstname" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_firstname'] : set_value('firstname'); ?>" size="30" />
            <p><?php echo form_error('firstname'); ?></p><br />
    
            <label class="label_form" for="birthdate">Date naissance</label>
            <input type="date" name="birthdate" required=""  value="<?= !empty($users_item['u_id']) ? $users_item['u_birthdate'] : set_value('birthdate'); ?>"/>
            <p><?php echo form_error('birthdate'); ?></p><br />
    
            <label class="label_form" for="phone">Tel : <i>10chiffres</i></label>
            <!-- // type="tel": bascule le clavier sur un smartphone -->
            <input type="tel" name="phone"  placeholder="0xxxxxxxxx" pattern="[0-9]{10}" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_phone'] : set_value('phone');?>" size="10" />
            <p><?php echo form_error('phone'); ?></p><br />
    
            <label class="label_form" for="email">mail</label>
            <input type="email" name="mail" placeholder="xxxxx.xxxx@xxxxxx.xxx" required="" pattern="[a-zA-Z0-9_-\.]+@{1}[a-zA-Z0-9]+(\.){1}[a-zA-Z0-9]{3,4}" value="<?= !empty($users_item['u_id']) ? $users_item['u_mail'] : set_value('mail');?>" size="50" />
            <p><?php echo form_error('mail'); ?></p><br />
<!--  [A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})  -->
            <label class="label_form" for="pwd">mot de passe</label>
            <input type="password" name="pwd" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_pwd'] : set_value('pwd'); ?>" size="10" />
            <p><?php echo form_error('pwd'); ?></p><br />
    
    </fieldset>
    <?php
}
?>
<!-- si connecté (users_item['u_id'] pas vide ) sinon  modification de la table  -->

        <input type="submit" name="submit" value="<?= !empty($users_item['u_id']) ? "Modify users item" : "Create users item" ?>" onclick="return confirm('Avez-vous rempli tous les champs???');" /><br />
    
        <?= form_close() ?>
    
    <!-- La méthode confirm() affiche une boîte de dialogue avec un message et deux boutons (OK et Annuler). Cette méthode envoie l'url pour traitement (true) si l’utilisateur clique sur OK, sinon (false) l'url n'est pas crée. -->
    
</section>


    <!--voir  validation en HTML : https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation -->
    <!-- CSS  by http://www.enseignement.polytechnique.fr/informatique/profs/Olivier.Serre/Memos/Formulaires_CSS/index.html -->
    <!--  regex mail : https://openclassrooms.com/forum/sujet/regex-pour-email-94939 -->
                <!-- "[a-zA-Z0-9._-]*@[a-zA-Z0-9_-]*.[a-zA-Z]{3,4}"  -->
                <!-- ^[a-zA-Z0-9._-]*.[a-zA-Z0-9._-]*@[a-zA-Z0-9_-]*.[a-zA-Z0-9_-]{3,4} -->