</section><br>
<hr />
<footer><br>
        <p>
                <a class="bouton" href="<?php echo site_url('locations/index'); ?>"> Locations</a>
        </p>
        <p>
                <a class="bouton" href="<?php echo site_url('carsToRent/index'); ?>"> voitures</a>
        </p>
        <?php
        echo 'appel de fonction hello() depuis footer_home';
        hello();

        //$cookie= get_cookie('remember_me');  
        //var_dump($cookie);      
        ?>
        <br>
        <!-- <a href="JavaScript:window.close()">Close</a> -->
        <!-- <a href="javascript:history.go(-1)">Retour</a> <br><br> -->
        <a class="bouton" href="<?php echo site_url('mysession/'); ?>">retour HOME</a> <br><br>
        <em>&copy; 2021 by VB</em>
</footer>




<!-- <script>
// Get the modal
var modal = document.getElementById('id04');

// When the user clicks anywhere outside of the modal, close it modale connexion
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->
<script src="<?php echo base_url("assets/js/script_slide_menu.js"); ?>"></script>
</body>

</html>