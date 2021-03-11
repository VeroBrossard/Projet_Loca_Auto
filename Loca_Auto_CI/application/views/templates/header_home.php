<html>

<head>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/modale_style.css"); ?>">

        <title>Loca-Auto - Location de voitures - Le Havre</title>
</head>

<body>

        <header>
                <div class="contenair-flex">
                        <div class="element-flex">
                                <p>depuis page header_home.php *** message dans $data **     <?= $title?></p>
                           

                        </div>
                        <div class="element-flex" >
                        <!-- style="visibility:hidden"  -->
                               +logo
                                <h2>Welcome session???  <?php echo $this->session->userdata('username'); ?>***</h2>
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
                                        <a class="bouton" href="<?php echo site_url('mysession/essaiConnexion'); ?>">connexion</a>
                                <?php
                                };
                                ?>
                                <p>
                         <a class="bouton" href="<?php echo site_url('locations/index'); ?>"> Locations</a>
                                </p>
                        </div>
                        <div class="element-flex">
                        <?php if (isset($this->session->username)) {
                                        // echo 'session username =  <br>';
                                        echo '$this->session->username = ' . $this->session->username . '<br>';
                                ?>
                                                        <p>
                         <a class="bouton" href="<?php echo site_url('users/create'); ?>">Modification</a>
                        </p>
                        <?php
                        }
                        else{
                         ?>
                        <p>
                         <a class="bouton" href="<?php echo site_url('users/create'); ?>">Inscription</a>
                        </p>
                        <?php
                        }
                        ?>
                        <p>
                         <a class="bouton" href="<?php echo site_url('carsToRent/index'); ?>"> voitures</a>
                        </p>
                        </div>
                </div>
        </header> <br>


        <!-- <div> <h1> H1<?php echo $title; ?></h1></div> -->