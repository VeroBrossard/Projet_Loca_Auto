<!-- <p>message d'en haut : <?= $title ?></p>  -->
<!-- depuis *** sess_form.php <br> -->
<!-- The Modal -->
    <div id="id04" class="modal">
    <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>

    <!-- <div style="text-align: center"> -->
    <?= form_open('mysession/verifConnexion', array('class' => 'modal-content animate')) ?>
    <div class="imgcontainer">
        <img src="<?= base_url('assets/img/logo/logo_mini_ok.jpg'); ?>" class="avatar" alt="Logo">
    </div>
    <div class="container">
        <label for="uname"><b>Nom</b></label><br>
        <input type="text" placeholder="Entrez votre NOM" name="uname" required><br>

        <label for="uphone"><b>Téléphone </b><i>(10 chiffres)</i></label><br>
        <input type="text" placeholder="Entrez votre n° de téléphone" name="uphone" required><br>

        <label for="upwd"><b>Password</b></label><br>
        <input type="password" placeholder="Entrez Mot de passe" name="upwd" required><br>

        <button class="modaleButton" type="submit">Me connecter</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>


    <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw"> <a href="#">password oublié ?</a></span>
    </div>
    </form>
    <!-- </div> -->