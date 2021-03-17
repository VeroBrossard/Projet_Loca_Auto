<!-- depuis *** connexion_modale.php.php <br> -->
<!-- The Modal -->
<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
  <?= !empty($users_item['u_id']) ? form_open('users/create/' . $users_item['u_id'], array('class' => 'modal-content animate'))
    : form_open('users/create', array('class' => 'modal-content animate')); ?>




  <?php
  //  ex create.php
  echo ' depuis user_param_modale.php <br><br><br>';

  if (!empty($users_item['u_id'])) {

    echo 'id users = ' . $users_item['u_id'] . "<br>";
    echo 'modification possible !.... <br>';

    //     $phone = $users_item['u_phone'];

  } else {
    echo " users_item['u_id'] est vide // user non connecté et/ou requete globale <br>";
    echo 'création  possible !.... <br>';
    !empty($users_item['u_id']) ?  "users_item['u_id']  = " . $users_item['u_id'] . "<br>" : "users_item['u_id']  est vide ";
  }

  if (!empty($title)) {
    echo "depuis  depuis user_param_modal.php " . $title . '<br>';
    echo 'dataUser = ' . $title . "<br>";

    // echo "var_dump dataUser  version 2";
    // var_dump($dataUser);

    echo "var_dump session->userdata";
    var_dump($this->session->userdata);
    // echo "var_dump userdata";
    // var_dump($userdata);

    // foreach ($userdata as $session_item):
    // echo $session_item ;
    // endforeach;

    echo '**** $this->session->user[firstname] = ' .  $this->session->user['firstname'] . '<br>';
    echo 'session paramétréesi pas vide  !.... <br>';
  } else {
    echo " dataUser  est vide // user non connecté <br>";
  }


  ?>
  <?php
  echo '<br> errors  or not errors... <br>';
  echo "<mark><big>" . validation_errors() . "</big></mark>";
  echo 'that is the question ??? <br><br>';


  echo "set_value('fonction')=  " . set_value('toArchive') . "<br>";
  var_dump(set_value('toArchive'));

  echo "varDump _POST " . set_value('toArchive') . "<br>";
  var_dump($_POST);
  ?>



  <?php if (isset($this->session->user['firstname'])) {
    // echo 'session ok  client authentifié =  <br>';
    echo 'cconnexion ok <br>';
    echo ' $this->session->user[firstname] = ' . $this->session->user['firstname'] . '<br>';
  ?>
    <h1>Welcome <?php echo  $this->session->user['firstname'] . '  ' .  $this->session->user['lastname']; ?></h1>
    <h2>Formulaire de modification </h2><br>
  <?php
  } else {
    echo 'PAS de session firstname <br>';
  ?>
    <h2>Formulaire d'inscription</h2><br>
  <?php
  };
  ?>
  <!-- ******    formulaire à remplir  -->
  <!-- <h2> comm depuis create.php <?php echo $comm; ?></h2> -->

  <?php
  if (isset($users_item['u_fonction']) && (($users_item['u_fonction']) == ("Admin" || "Employé"))) {

    echo "users_item['u_fonction'] =" . $users_item['u_fonction'] . "<br>";
  ?>
    <!-- *******   partie admin  *********    -->
    <!-- //pour choix action  autorisées-->
    <input type="hidden" name="id" value="<?= !empty($users_item['u_id']) ? $users_item['u_id'] : '' ?>" />
    <!-- //pour archivage ou pas eq supprssion-->

    <!-- <div class="form_div">    
    <span><label for="fonction"> Fonction sur le site : <br> <i>"Admin, Employé ou None" : </i></label></span>
    <span><input type="text" style="width:100px;" name="fonction" pattern="[Em]ployé|[Aa]dmin|[Nn]one" value="<?= !empty($users_item['u_id']) ? $users_item['u_fonction'] : (empty(set_value('fonction')) ? 'None' : set_value('fonction')); ?>" size="30" /></span>
    </div>
    <p><?php echo form_error('fonction'); ?></p><br /> -->

  <?php
  }
  //partie autorisée aussii aux pas ADMIN ni Employés
  ?>
  <div class="form_div" style="border:2px solid red; display:none;">

    <p>A&nbsp;archiver&nbsp;? </p>

    <input type="radio" id="Non" name="toArchive" value="0" checked> <label for="Non">Non</label>

    <input type="radio" id="Oui" name="toArchive" value="1"> <label for="Oui">Oui</label>

    <br><br>
    <p> Fonction ? </p>

    <input type="radio" id="Admin" name="fonction" value="Admin" style="display:none;"> <label for="Admin">Admin</label>

    <input type="radio" id="Employé" name="fonction" value="Employé"> <label for="Employé">Employé</label>

    <input type="radio" id="None" name="fonction" value="None" checked> <label for="None">None</label>
  </div>

  // ********************************

  <div class="imgcontainer">
    <img src="<?= base_url('assets/img/logo/logo_mini_ok.jpg'); ?>" class="avatar" alt="Logo">

    <p><i>Complétez le formulaire. Tous les champs sont <em>obligatoires</em></p>

    <legend>Vos infos:</legend>
    <div class="container">



      <label class="label_form" for="lastname"><b>Nom</b></label><br>
      <input type="text" name="lastname" placeholder="ex: DUPONT" autofocus="" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_lastname'] : set_value('lastname'); ?>" size="30" />
      <p><?php echo form_error('lastname'); ?></p><br />

      <label class="label_form" for="firstname"><b>Prénom</b></label><br>
      <input type="text" name="firstname" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_firstname'] : set_value('firstname'); ?>" size="30" />
      <p><?php echo form_error('firstname'); ?></p><br />
      <br>
      <label class="label_form" for="birthdate"><b>Date naissance</b></label>
      <input type="date" name="birthdate" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_birthdate'] : set_value('birthdate'); ?>" />
      <p><?php echo form_error('birthdate'); ?></p><br />

      <label class="label_form" for="phone"><b>Tel : </b><i>10chiffres</i></label><br>
      <!-- // type="tel": bascule le clavier sur un smartphone -->
      <input type="tel" name="phone" placeholder="0xxxxxxxxx" pattern="[0-9]{10}" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_phone'] : set_value('phone'); ?>" size="10" />
      <p><?php echo form_error('phone'); ?></p><br />

      <label class="label_form" for="email"><b>mail</b></label><br>
      <input type="email" name="mail" placeholder="xxxxx.xxxx@xxxxxx.xxx" required="" pattern="[a-zA-Z0-9_-\.]+@{1}[a-zA-Z0-9]+(\.){1}[a-zA-Z0-9]{3,4}" value="<?= !empty($users_item['u_id']) ? $users_item['u_mail'] : set_value('mail'); ?>" size="50" />
      <p><?php echo form_error('mail'); ?></p><br />
      <!--  [A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})  -->
      <label class="label_form" for="pwd"><b>mot de passe</b></label><br>
      <input type="password" name="pwd" required="" value="<?= !empty($users_item['u_id']) ? $users_item['u_pwd'] : set_value('pwd'); ?>" size="10" />
      <p><?php echo form_error('pwd'); ?></p><br />


      <!-- si connecté (users_item['u_id'] pas vide ) sinon  modification de la table  -->
      <button class="modaleButton" type="submit">M'inscrire</button>
      <label> <input type="checkbox" checked="checked" name="remember"> Remember me </label>
    </div>


    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">password oublié ?</a></span>
    </div>
    </form>

</div>
</div>

    </body>

    </html>