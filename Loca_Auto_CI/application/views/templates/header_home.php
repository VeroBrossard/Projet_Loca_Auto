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
<!-- 
<div class="contPrinc">
    <div class="contMenu" id="contMenu">
      <ul style="color:gold;">
        <li class="lstItem">Menu1</li>
        <li class="lstItem">Menu2</li>
        <li class="lstItem">Menu3</li>
      </ul>
    </div>
    <div class="contBtn">
      <a href="javascript:void(0)" class="btn" id="btn" onclick="openCloseMenu()">
        <i class="fas fa-2x fa-cog"></i>
      </a>
    </div>
    <div class="contBody"> -->




        <?php
        echo !empty($_SESSION['ACCES']) ? 'ACCES pas vide ' : 'ACCES vide => pas authentifié !! ';
        //=> renvoie si ACCESest rempli  ou pas 

        ?>
        <header>
                <div class="contenair-flex" >
                <div style="background-color:blue; " element-flex">
 <div class="dropdown" style="float:left;">
  <button class="dropbtn"><a class="active" href="#"><i class="fa fa-home"></i></a></button>
  <div class="dropdown-content">
  <a href="<?php echo site_url('mysession/essaiConnexion'); ?>"><i class="fas fa-sign-in-alt"></i>  Connexion</a>
    <a href="#"><i class="far fa-edit"></i> Inscription</a>
    <a href="#">Link 3</a>
    
  <a href="#"><i class="fa fa-search"></i> Search</a>
  <a href="#"><i class="fa fa-envelope"></i> Contact Us</a>
  <a href="#"><i class="fa fa-globe"></i> Globe</a>
  <a href="#"><i class="fa fa-trash"></i> Annuler </a>
  </div>
</div>
                <br><br>
        
                <!-- <br>***********debut **** <br>

<h1>depuis page header_home.php </h1>
<h1>Titre principal</h1>
<button id="b1">slideUp()</button>
<button id="b2">slideDown()</button>
<button id="b3">slideToggle()</button>

<br>******* fin *****<br> -->

</div>
                        <div style="background-color:red; " class="element-flex">
                        <?php
                                (!empty($_SESSION['ACCES'])) ?  'message dans $session **' . $_SESSION['title'] . '<br> ' : '';
                                ?>
                                <!-- style="visibility:hidden"  -->
                                +logo
                                <?php if (!empty($_SESSION['ACCES'])) {
                                        // echo 'session username =  <br>';
                                ?>

                                        <h2>Welcome <?php echo $this->session->userfirstname; ?></h2>"
                                <?php
                                } else {
                                        // echo 'PAS de session username <br>'; 
                                ?>


                                        <h2>Welcome stranger.. </h2>
                                <?php
                                }
                                ?>
                        </div>
                        <div style="background-color:red; " class="element-flex">
                                <p>
                                        <?php if (!empty($_SESSION['ACCES'])) {
                                                // echo 'session username =  <br>';
                                                echo '$this->session->username = ' . $this->session->username . '<br>';
                                        ?>
                                                <a class="bouton" href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');">Déconnexion</a>
                                        <?php
                                        } else {
                                                // echo 'PAS de session ACCES <br>'; 
                                        ?>
                                                <a class="bouton" href="<?php echo site_url('mysession/essaiConnexion'); ?>">Connexion</a>
                                        <?php
                                        };
                                        ?>

                        </div>
                        <div style="background-color:red; " class="element-flex">
                                <?php if (!empty($_SESSION['ACCES'])) {
                                        // echo 'session username =  <br>';
                                        echo '$this->session->username = ' . $this->session->username . '<br>';
                                ?>
                                        <p>
                                                <a class="bouton" href="<?php echo site_url('users/create'); ?>">Modification</a>
                                        </p>
                                <?php
                                } else {
                                ?>
                                        <p>
                                                <a class="bouton" href="<?php echo site_url('users/create'); ?>">Inscription</a>
                                        </p>
                                <?php
                                }
                                ?>

                        </div>
                        <div style="background-color:red; " class="element-flex">


                                <?php if (!empty($_SESSION['ACCES']) && $_SESSION['ACCES'] == 'Admin') {

                                ?>
                                        <p> ****access pas vide et acces=admin<br>
                                                <a href="<?php echo site_url('admin...'); ?>">
                                                        <img src="<?= base_url('assets/img/logo/gear-logo.png'); ?>" width="35em" alt="Admin"></a>
                                        </p>
                                <?php
                                } elseif (!empty($_SESSION['ACCES']) && $_SESSION['ACCES'] == 'None') {
                                ?>
                                        <p> ***access pas vide et acces=NOne<br>
                                                <a href="<?php echo site_url('paramUser...'); ?>">
                                                        <i class="fas fa-users-cog fa-2x" style="color:dimgray;"></i> </a>
                                        </p>
                                <?php
                                } else {
                                ?>
                                        <i class="fas fa-users-cog fa-2x" style="color:dimgray;"></i>
                                        <!-- autres cas  -->
                                <?php
                                }
                                ?>
                        </div>
                </div>
        </header> <br>

                        </div>
                        </div>
        <!-- <div> <h1> H1<?php echo $title; ?></h1></div> -->


        <!-- Button to open the modal login form -->
<button onclick="document.getElementById('id04').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id04" class="modal">
  <span onclick="document.getElementById('id04').style.display='none'"
class="close" title="Close Modal">&times;</span>

<?php
$this->load->view('mysession/sess-form');
// <?php echo base_url("assets/js/cours.js"); ?>
?>
  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
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
  </form>
</div>

