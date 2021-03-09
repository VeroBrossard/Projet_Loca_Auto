<html>

<head>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">

        <title>Loca-Auto - Location de voitures - Le Havre</title>
</head>

<body>

        <header>
                <div class="contenair-flex">
                        <div class="element-flex">
                                <p>depuis page header.php *****</p>
                        </div>
                        <div class="element-flex" style="visibility:hidden" >
                                <p> barre de nav et logo </p>
                        </div>
                        <div class="element-flex" >
                        <p>
                                <?php if (isset($this->session->username)) {
                                        // echo 'session username =  <br>';
                                        echo '$this->session->username = ' . $this->session->username . '<br>';
                                ?>
                                <a class="bouton" href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');">Déconnexion</a>
                                <?php
                                } else {
                                        // echo 'PAS de session username <br>'; 
                                        ?>
                                        <a class="bouton" href="<?php echo site_url('mysession/connexion'); ?>">connexion</a>
                                <?php
                                };
                                ?>
                                </p>
                        </div>
                        <div class="element-flex">
                        <p>
                         <a class="bouton" href="<?php echo site_url('mysession/inscription'); ?>">Inscription</a>
                        </p>
                        </div>
                </div>
        </header> <br>


        <!-- <div> <h1> H1<?php echo $title; ?></h1></div> -->