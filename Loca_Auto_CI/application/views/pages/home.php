
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
<br>    
****************************

<br><br>
<p>Lorem ipsum dolor sit amet. Hic voluptatem labore aut consequatur obcaecati <em>Eum maiores sit iure enim non laboriosam libero</em>. Qui dignissimos quisquam At error vitae et blanditiis omnis et quas minus sed doloribus corporis. </p><p>Ex perferendis molestiae nam enim veritatis <strong>Sed corporis vel repellendus eveniet aut consequatur fuga rem dolorum nesciunt</strong>. Quo sapiente labore eum libero ipsum a tempora minima est enim rerum sit libero voluptates et possimus suscipit ut quod vero. Qui fuga voluptates cum cupiditate iste <em>Aut nisi et enim quasi quo voluptas natus et Quis omnis</em> sed similique voluptas! Sed quaerat quia ut repudiandae quae et dolorem dolorem. </p><dl><dt><dfn>Aut doloremque voluptas et molestiae labore. </dfn></dt><dd>Et dignissimos galisum sed distinctio illo. </dd><dt><dfn>Aut consectetur sint. </dfn></dt><dd>Ab esse mollitia eos omnis saepe sed nemo molestiae eos magni nemo! </dd><dt><dfn>Qui architecto aliquam. </dfn></dt><dd>Sit saepe temporibus et alias autem et corrupti odio ea cumque reiciendis? </dd></dl><p>Sit assumenda harum et iure eaque quo suscipit dolor qui corporis sunt rem quia suscipit ad consequatur iure sed nemo maxime. Ad accusamus omnis qui autem nisi id iure labore sit impedit aliquid et quisquam cupiditate et excepturi placeat est iusto repellendus. At repellendus rerum <em>Eos dolores ut odio voluptas qui molestiae animi ut labore dicta</em>! Sed animi alias sed necessitatibus similique et voluptatem provident! </p>


/// partie à voir plus tard

<br><br>
        <a class= "bouton" href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');"> <mark>Remove Session</mark></a>
<p><a href="<?php echo site_url('users'); ?>">vers BDD // Table  userS</a></p>
    <!-- http://lamanu-formationcomplete/CodeIgniterHospital/news  -->

<?= hello() ?>
