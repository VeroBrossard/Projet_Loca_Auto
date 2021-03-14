<html>

<head>
        <!-- <script src="https://use.fontawesome.com/951d321079.js"></script> -->
        <script src="https://kit.fontawesome.com/07d23712a0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/modaleForm_style.css"); ?>">

        <link rel="stylesheet" href="<?php echo base_url("assets/css/style_slide_menu"); ?>">
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

                                <a href=javascript:void(0); onclick="document.getElementById('id04').style.display='block'">
                                <i class="fas fa-sign-in-alt"></i> Connexion</a>
                                        <a href="#"><i class="far fa-edit"></i> Inscription</a>
                                        <a href="#">Link 3</a>

                                        <a href="#"><i class="fa fa-search"></i> Search</a>
                                        <a href="#"><i class="fa fa-envelope"></i> Contact Us</a>
                                        <a href="#"><i class="fa fa-globe"></i> Globe</a>
                                        <a href="#"><i class="fa fa-trash"></i> Annuler </a>
                                </div>
                        </div>
                        <div style="width:30vw;">&nbsp;</div>

                        <div class="contenair-flex ">
                                <div class="element-flex">
                                        <img id="imgLogoCar" src="<?= base_url('assets/img/logo/logo_mini_ok.jpg'); ?>" alt="Logo LOCA-AUTO">
                                </div>

                        </div>


                                        <!-- <?php echo $this->session->users['u_lastname']; ?> -->
                        <div style="width:25vw;">&nbsp;</div>
                        <div class="contenair-flex divACacher" style="width:200px;">  
                                <div class="element-flex divLogoACacher">

                                        <?php if (!empty($_SESSION['ACCES'])) {
                                                // *** Admin et simple user connecté  => déconnexion
                                        ?>
                                                <p class="p_iconeLogo">
                                                        <a href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');"></a><br><span class="minifont">Déconnexion</span>
                                                </p>
                                        <?php
                                        } else {
                                                //  *** User inconnu ( non connecté ) => connexion
                                        ?>
                                                <p class="p_iconeLogo">
                                                        <button onclick="document.getElementById('id04').style.display='block'">
                                                                <i class="fas fa-sign-in-alt iconeConn"></i></button><br>
                                                        <span class="minifont">Connexion</span>
                                                       </p>
                                        <?php
                                        }
                                        ?>
                                </div>


                                <div class="element-flex divLogoACacher">

                                        <?php
                                        if (!empty($_SESSION['ACCES']) && $_SESSION['ACCES'] == 'Admin') {
                                                //   *** Admin connecté
                                        ?>
                                <p class="p_iconeLogo"> <br>
                                        <a href="<?php echo site_url('admin...'); ?>">
                                                <img src="<?= base_url('assets/img/logo/gear-logo.png'); ?>" width="35em" alt="Admin"></a><br><span class="minifont">Admin</span>
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
                                <!-- <button onclick="document.getElementById('id03').style.display='block'"> -->
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


        <!-- <div> <h1> H1<?php echo $title; ?></h1></div> -->


        <!-- Button to open the modal login form -->
        <!-- <button onclick="document.getElementById('id04').style.display='block'">Login</button> -->

        <!-- The Modal -->
        <!-- <div id="id04" class="modal">
                <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span> -->

        <!-- 
                <form class="modal-content animate" action="/action_page.php"> -->

        <!--  Modal Content -->
        <?php



        // *****   pour fenetre modale enregistrement
        // $this->load->view('modales/connexion_modale');
        // $this->load->view('modales/user_param_modale');



        // <?php echo base_url("assets/js/cours.js"); ?
        ?>

        <!-- <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>namee</b></label>
      <input type="text" placeholder="Enter name" name="uname" required>

      <label for="psw"><b>Password</b></label>name
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form> -->
        </div>