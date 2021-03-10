
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion user</title>
    </head>
    <body>
        <div style="text-align: center" >
        depuis  sess-form.php<br>
        <?= form_open('mysession/add') ?>
            <!-- <form action="<?php echo site_url('mysession/add') ?>" method="post"> -->
                <input type="text" placeholder="Enter Name" name="uname">
                <input type="pwd" placeholder="Enter pwd" name="upwd">
                <button type="submit">Set Name</button>
            </form>
        </div>
    </body>
</html>