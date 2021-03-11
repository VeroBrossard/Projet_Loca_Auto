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
            echo "vardump de this->session->userdata";
            var_dump($this->session->userdata);
            echo '$title';
            foreach($this->session->userdata as $key =>$element)

{

   echo $key . '=' . $element . '<br />'; // affichera 

}
            ?>
            depuis  sess-form.php<br>
            pwd : <?php echo $this->session->userdata('userpwd'); ?><br>
            <a href="<?php echo site_url('mysession/remove'); ?>">Remove Session</a>
        </div>
    </body>
</html