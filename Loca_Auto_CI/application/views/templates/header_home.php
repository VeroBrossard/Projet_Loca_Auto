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
                                <button class="dropbtn"><a class="active" href="#"><i class="fa fa-home fa-2x"></i></a></button>
                                <div class="dropdown-content">
                                        <a href="<?php echo site_url('mysession/essaiConnexion'); ?>"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                                        <a href="#"><i class="far fa-edit"></i> Inscription</a>
                                        <a href="#">Link 3</a>

                                        <a href="#"><i class="fa fa-search"></i> Search</a>
                                        <a href="#"><i class="fa fa-envelope"></i> Contact Us</a>
                                        <a href="#"><i class="fa fa-globe"></i> Globe</a>
                                        <a href="#"><i class="fa fa-trash"></i> Annuler </a>
                                </div>
                        </div>
                
                        <div class="contenair-flex" style="min-width:60%;">
                                <div style="background-color:red; " class="element-flex minifont aCacher"  >
                                        <?php
                                        (!empty($_SESSION['ACCES'])) ?  'message dans $session **' . $_SESSION['title'] . '<br> ' : '';
                                        ?>
                                        <!-- style="visibility:hidden"  -->
                                        <?php if (!empty($_SESSION['ACCES'])) {
                                        ?>
                                                <Bonjour <?php echo $this->session->user['firstname'] . '' . $this->session->users['u_lastname']; ?>"
                                        <?php
                                        } else {
                                        ?>
                                                Welcome stranger.. 
                                        <?php
                                        }
                                        ?>
                                </div>
                                <div>
                                        <img src="<?= base_url('assets/img/logo/logo_mini_ok.jpg'); ?>"  alt="Logo LOCA-AUTO">

                                </div>
                                <div style="background-color:yellow; " class="element-flex aCacher">
                                <?php
                                echo !empty($_SESSION['ACCES']) ? 'ACCES pas vide ' : 'ACCES vide => pas authentifié !! ';
        //=> renvoie si ACCESest rempli  ou pas 

        ?>
                                </div>
                        </div>


                        <!-- <?php echo $this->session->users['u_lastname']; ?> -->

                        <div class="contenair-flex">
                                <div style="background-color:lightblue; " class="element-flex">
                                        <?php if (!empty($_SESSION['ACCES'])) {
                                                // *** Admin et simple user connecté  => déconnexion                           
                                        ?>
                                                <p>
                                                        <a class="bouton" href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');">Déconnexion</a>
                                                </p>
                                        <?php
                                        } else {
                                                //  *** User inconnu ( non connecté ) => connexion   
                                        ?>
                                                <p>
                                                        <button onclick="document.getElementById('id04').style.display='block'" style="margin-top:2px;">
                                                                <i class="fas fa-sign-in-alt fa-2x"></i></button><br>
                                                        <span class="minifont">Connexion</span>
                                                        <!-- <a class="bouton" href="<?php echo site_url('mysession/essaiConnexion'); ?>">Connexion</a> -->
                                                </p>
                                        <?php
                                        }
                                        ?>
                                </div>
                                <span style="width:30px">&nbsp;</span>
                                <div style="background-color: gold; " class="element-flex">

                                        <?php if (!empty($_SESSION['ACCES']) && $_SESSION['ACCES'] == 'Admin') {
                                                //   *** Admin connecté
                                        ?>
                                                <p> ****ACCES pas vide et ACCES = admin => vers tout A FINIR <br>
                                                        <a href="<?php echo site_url('admin...'); ?>">
                                                                <img src="<?= base_url('assets/img/logo/gear-logo.png'); ?>" width="35em" alt="Admin"></a>
                                                </p>
                                        <?php
                                        } elseif (!empty($_SESSION['ACCES']) && $_SESSION['ACCES'] == 'None') {
                                                //   ****  simple user connecté
                                        ?>
                                                <p> ***access pas vide et acces=NOne => vers modification user<br>
                                                        <a href="<?php echo site_url('paramUser...'); ?>">
                                                                <i class="fas fa-users-cog fa-2x" style="color:dimgray;"></i> </a>
                                                </p>
                                        <?php
                                        } else {
                                                //  *** user inconnu 
                                        ?>
                                                <p>
                                                        <a href="<?php echo site_url('users/create'); ?>" title="inscription">
                                                                <i class="far fa-edit fa-3x"></i></a><br><span class="minifont">Inscription</span>
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
        $this->load->view('mysession/sess-form');
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