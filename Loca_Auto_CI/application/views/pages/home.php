
</section>
<div id="myHomeChoiceImg" >
    <span id="myHomeChoiceLocation">
        barre de choix location 
    </span> 
  </div>

<section>
<span>depuis /pages/home.php by VB  data _title  est : <?= $title ?> </span>
<?php
                                        echo (!empty($_SESSION['ACCES']) ? "Bonjour" .  $this->session->user['firstname'] . " " . $this->session->users['u_lastname'] . "<br>" . $_SESSION['title'] . "<br> " : "Welcome stranger..");
                                        ?>
                                        <br><hr>

<?php
// ***************       Ok pour recup var de session       *********************** //
//  $this->session->users['u_mail'])  => renvoie  la var de session u_mail 
echo isset($_SESSION['ACCES']) ? 'ACCES existe' : 'ACCES non initiée !! '; 
echo '<br>';
echo !empty($_SESSION['ACCES']) ? 'ACCES pas vide' : 'ACCES vide !! ';
//=> renvoie si ACCESest défini ou pas
//echo $_SESSION['ACCES'] ;
//echo $_SESSION['title'] ;
?>

/// partie à voir plus tard

<br><br>
        <a class= "bouton" href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');"> <mark>Remove Session</mark></a>
<p><a href="<?php echo site_url('users'); ?>">vers BDD // Table  userS</a></p>
    <!-- http://lamanu-formationcomplete/CodeIgniterHospital/news  -->

<?= hello() ?>
