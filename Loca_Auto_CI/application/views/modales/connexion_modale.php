<!-- <p>message d'en haut : <?= $title ?></p>  -->

<!-- "depuis *** connexion_modale.php.php <br> "; -->
<!-- The Modal -->

<div id="id_form_conn" class="modal">

    
    <span onclick="document.getElementById('id_form_conn').style.display='none'" class="close" title="Close Modal">&times;</span>
    <!-- <div style="text-align: center"> -->
    <?= form_open('mysession/verifConnexion', array('class' => 'modal-content animate')) ?>

    <div class="imgcontainer">
        <img src="<?= base_url('assets/img/logo/logo_mini_ok.jpg'); ?>" class="avatar" alt="Logo">
    </div>
    <div class="container">
    <h2>LEWEL Depuis connexion_modale.php  (modale  avec id_form_conn)</h2>
        <label for="uname"><b>Nom</b></label><br>
        <input type="text" placeholder="Entrez votre NOM" name="uname" required><br>
        <p><?php echo form_error('uname'); ?></p><br />
        <label for="uphone"><b>Téléphone </b><i>(10 chiffres)</i></label><br>
        <input type="text" placeholder="Entrez votre n° de téléphone" name="uphone" required><br>
        <p><?php echo form_error('uphone'); ?></p>
        <label for="upwd"><b>Password</b></label><br>
        <input type="password" placeholder="Entrez Mot de passe" name="upwd" required><br>
        <p><?php echo form_error('pwd'); ?></p>
        
        <button class="modaleButton" type="submit">Me connecter</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>


    <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id_form_conn').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw"> <a href="#">password oublié ?</a></span>
    </div>
    </form>
    <!-- </div> -->



    <!-- 
        <input type="submit" name="submit" value="<?= !empty($users_item['u_id']) ? "Modify users item" : "Create users item" ?>" onclick="return confirm('Avez-vous rempli tous les champs???');" /><br /> -->

    <!-- <?= form_close() ?> -->

    <!-- La méthode confirm() affiche une boîte de dialogue avec un message et deux boutons (OK et Annuler). Cette méthode envoie l'url pour traitement (true) si l’utilisateur clique sur OK, sinon (false) l'url n'est pas crée. -->




    <!--voir  validation en HTML : https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation -->
    <!-- CSS  by http://www.enseignement.polytechnique.fr/informatique/profs/Olivier.Serre/Memos/Formulaires_CSS/index.html -->
    <!--  regex mail : https://openclassrooms.com/forum/sujet/regex-pour-email-94939 -->
    <!-- "[a-zA-Z0-9._-]*@[a-zA-Z0-9_-]*.[a-zA-Z]{3,4}"  -->
    <!-- ^[a-zA-Z0-9._-]*.[a-zA-Z0-9._-]*@[a-zA-Z0-9_-]*.[a-zA-Z0-9_-]{3,4} -->
</div>