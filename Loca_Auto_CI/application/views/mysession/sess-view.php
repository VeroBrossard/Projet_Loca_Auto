<!-- Example code of view showing session name (sess-view.php) -->
<!DOCTYPE html>
<html>
    <head>
        <title>Codeigniter Session Demo | techbriefers.com</title>
    </head>
    <body>
        <div style="text-align: center" >
            <h1>Welcome <?php echo $this->session->userdata('username'); ?></h1>
            <?php
            var_dump($this->session->userdata);
            ?>
            depuis  sess-form.php<br>
            pwd : <?php echo $this->session->userdata('userpwd'); ?><br>
            <a href="<?php echo site_url('mysession/remove'); ?>">Remove Session</a>
        </div>
    </body>
</html