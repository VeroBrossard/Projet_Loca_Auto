<html>

<head>
        <!-- <script src="https://use.fontawesome.com/951d321079.js"></script> -->
        <script src="https://kit.fontawesome.com/07d23712a0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/modaleForm_style.css"); ?>">

        <link rel="stylesheet" href="<?php echo base_url("assets/css/style_slide_menu"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/flip_box_style"); ?>">
        <title>Loca-Auto - Location de voitures - Le Havre</title>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <!-- <script src="<?php echo base_url("assets/js/cours.js"); ?> async></script> -->
</head>

<body>

        <header>
                <!-- ***  nav bar sur le coté  -->
                <div class="contenair-flex">

                        <div class="dropdown" style="float:left;">
                                <button class="dropbtn"><a class="active" href="#"><i class="fa fa-home fa-2x  homeLogo"></i></a></button>
                                <div class="dropdown-content">
                                        <?php
                                        if (empty($_SESSION['ACCES'])) {
                                                //<!-- ----   si pas connecté -->
                                        ?>

                                                        <a href="<?php echo site_url('mysession/'); ?>"><i class="fa fa-trash"></i> Accueil </a>
                                                        <!-- LEWEL faire renvoie de données si recherche en cours -->
                                                        <a href=javascript:void(0); onclick="document.getElementById('id_form_user').style.display='block'"><i class="far fa-edit"></i> Inscription</a>
                                                        <a href=javascript:void(0); onclick="document.getElementById('id_form_conn').style.display='block'"><i class="fas fa-sign-in-alt"></i> Connexion</a>

                                                        <a href="<?php echo site_url('carsToRent/'); ?>"><i class="fa fa-search"></i> Rechercher un véhicule</a>
                                                        <a href="#"><i class="fa fa-search"></i> Louer un véhicule</a>
                                                        <a href="#"><i class="fa fa-envelope"></i> Nos conditions</a>
                                                        <a href="#"><i class="fa fa-envelope"></i> Nous contacter</a>
                                                        <!-- ----   si  connecté -->
                                                <?php
                                        }
                                        if (!empty($_SESSION['ACCES'])) {
                                                //   ****  simple user connecté
                                                ?>
                                                        <a href="#"><i class="fa fa-trash"></i> Accueil </a>
                                                        <a href="#"><i class="far fa-edit"></i> Mon Compte</a>
                                                        <a href="#"><i class="fa fa-search"></i> Rechercher un véhicule</a>
                                                        <a href="#"><i class="fa fa-search"></i> Louer un véhicule</a>
                                                        <a href="#"><i class="fa fa-trash"></i>Annuler une réservation </a>
                                                        <a href="#"><i class="fa fa-envelope"></i> Nos conditions</a>
                                                        <a href="#"><i class="fa fa-envelope"></i> Nous contacter</a>
                                                        <a href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');"> 
                                                       <i class="fas fa-sign-in-alt"></i> Déconnexion</a>

                                                <?php
                                        }
                                        if (!empty($_SESSION['ACCES']) && ($_SESSION['ACCES'] == 'Admin' || $_SESSION['ACCES'] == 'Employé')) {
                                                //   *** Admin ou employé connecté
                                                ?>
                                                        <a href="#"><i class="far fa-edit"></i> Admin</a>
                                                <?php
                                        }
                                                ?>
                                </div>
 <!-- ***  fin de  <div class="dropdown-content">  -->
                        </div>
                        <div style="width:30vw;">&nbsp;</div>

                        <div class="contenair-flex ">
                                <div class="element-flex">
                                        <img id="imgLogoCar" src="<?= base_url('assets/img/logo/logo_mini_ok.jpg'); ?>" alt="Logo LOCA-AUTO">
                                </div>

                        </div>
<!--  LEWEL message de bienvenue ??  voir user_welcome.php -->
 <p class="minifont">Bienvenue <?php echo $this->session->users['u_lastname']; ?></p>
                        <!-- <?php echo $this->session->users['u_lastname']; ?> -->
                        <div style="width:25vw;">&nbsp;</div>
                        <div class="contenair-flex divACacher" style="width:200px;">
                                <div class="element-flex divLogoACacher">

                                        <?php if (!empty($_SESSION['ACCES'])) {
                                                // *** Admin et simple user connecté  => déconnexion
                                        ?>
                                                <p class="p_iconeLogo" style="font-size:30px; padding-top:10px;">
                                                <a href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');"> <i class="fas fa-sign-in-alt"></i> </a><br> <span class="minifont">Déconnexion</span>
                                                </p>
                                        <?php
                                        } else {
                                                //  *** User inconnu ( non connecté ) => connexion
                                        ?>
                                                <p class="p_iconeLogo">
                                                        <button onclick="openConn()">
                                                                <i class="fas fa-sign-in-alt iconeConn"></i></button><br>
                                                        <span class="minifont">Connexion</span>
                                                </p>
                                        <?php
                                        }
                                        ?>
                                </div>


                                <div class="element-flex divLogoACacher">

                                        <?php
                                        if (!empty($_SESSION['ACCES']) && ($_SESSION['ACCES'] == 'Admin' || $_SESSION['ACCES'] == 'Employé')) {
                                                //   *** Admin ou employé connecté
                                        ?>
                                                <p class="p_iconeLogo" style="padding-top:10px;"> 
                                                        <a href="<?php echo site_url('mysession/admin'); ?>">
                                                                <img src="<?= base_url('assets/img/logo/gear-logo.png'); ?>" width="30em" alt="Admin"></a><br><span class="minifont">Admin</span>
                                                </p>
                                        <?php
                                        } elseif (!empty($_SESSION['ACCES']) && $_SESSION['ACCES'] == 'None') {
                                                //   ****  simple user connecté
                                        ?>
                                                <p class="p_iconeLogo">
                                                        <a href="<?php echo site_url('paramUser...'); ?>">
                                                                <i class="fas fa-users-cog fa-2x" style="color:dimgray;"></i> </a><br><span class="minifont">Modifier</span>
                                                </p>
                                        <?php
                                        } else {
                                                //  *** user inconnu
                                        ?>
                                                <p class="p_iconeLogo">
                                                        <button onclick="openForm()">
                                                                <i class="far fa-edit iconeConn"></i></button><br>
                                                        <span class="minifont">Inscription</span>
                                                </p> <!-- autres cas  -->
                                        <?php
                                        }
                                        ?>
                                </div>

                        </div>
                </div>
        </header>



        <?php



        // *****   pour fenetre modale enregistrement dans home.php
        // $this->load->view('modales/connexion_modale');
        // $this->load->view('modales/user_param_modale');

        ?>




        </div>