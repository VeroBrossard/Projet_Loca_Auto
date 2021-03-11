
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion user</title>
    </head>
    <body>
    <p>message d'en haut : <?= $title ?></p>
depuis sess_form.php <br>
        <div style="text-align: center" >
                <?= form_open('mysession/verifConnexion') ?>
            <!-- <form action="<?php echo site_url('mysession/add') ?>" method="post"> -->
                <input type="text" placeholder="Enter Name" name="uname">
                <input type="text" placeholder="Enter PHONE number" name="uphone">
                <input type="pwd" placeholder="Enter pwd" name="upwd">
                <button type="submit">Me connecter</button>
            </form>
        </div>
    </body>
</html>