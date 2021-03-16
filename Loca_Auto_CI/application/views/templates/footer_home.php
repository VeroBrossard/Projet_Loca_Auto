</section><br>
<!-- <span>depuis /footer_home by VB  data _title  est : <?= $title ?> </span> -->
<!-- <?php
echo (!empty($_SESSION['ACCES']) ? "Bonjour" .  $this->session->user['firstname'] . " " . $this->session->users['u_lastname'] . "<br>" . $_SESSION['title'] . "<br> " : "Welcome stranger..");
?> -->
                                        <br><hr>
<!-- 
<?php
// ***************       Ok pour recup var de session       *********************** //
//  $this->session->users['u_mail'])  => renvoie  la var de session u_mail 
echo isset($_SESSION['ACCES']) ? 'ACCES existe' : 'ACCES non initiée !! '; 
echo '<br>';
echo !empty($_SESSION['ACCES']) ? 'ACCES pas vide' : 'ACCES vide !! ';
//=> renvoie si ACCESest défini ou pas
//echo $_SESSION['ACCES'] ;
//echo $_SESSION['title'] ;
?> -->

<br><br>
        <a class= "bouton" href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');"> <mark>Remove Session</mark></a>

<!-- <p><a href="<?php echo site_url('users'); ?>">vers BDD // Table  userS</a></p> -->
    <!-- http://lamanu-formationcomplete/CodeIgniterHospital/news  -->

<!-- <?= hello() ?> -->

<hr />
<footer><br>
        <!-- <p>
                <a class="bouton" href="<?php echo site_url('locations/index'); ?>"> Locations</a>
        </p>
        <p>
                <a class="bouton" href="<?php echo site_url('carsToRent/index'); ?>"> voitures</a>
        </p> -->
        <!-- <?php
        // echo 'appel de fonction hello() depuis footer_home';
        // hello();

        //$cookie= get_cookie('remember_me');  
        //var_dump($cookie);      
        ?> -->
        <br>
        <!-- <a href="JavaScript:window.close()">Close</a> -->
        <!-- <a href="javascript:history.go(-1)">Retour</a> <br><br> -->
        <a class="bouton" href="<?php echo site_url('mysession/'); ?>">retour HOME</a> <br><br>
        <em>&copy; 2021 by VB</em>
</footer>

<!-- <?php
// $this->load->view('modales/connexion_modale');
?> -->
<!-- <scrip>
// Get the modal
var modal = document.getElementById('id_form_conn');

// When the user clicks anywhere outside of the modal, close it modale connexion
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</scrip> -->
<script type = 'text/javascript' src="<?php echo base_url("assets/js/script_modale_id_form_user.js"); ?>"></script>
<!-- <script type = 'text/javascript' src="<?php echo base_url("assets/js/script_modale_id_form_conn.js"); ?>"></script>  -->
