<html>
        <head>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("assets/css/form_style.css"); ?>">
                <title>CodeIgniter VB header.php</title>
        </head>
        <body>
        <header id="header"><span class="header">CodeIgniter VB header</span></header> <br>
       
<div>depuis header.php  <h1> H1<?php echo $title; ?></h1></div>
<h2>Welcome session???  
        <?php echo   $this->session->username ; 
         
         ?></h2>
         <?php
        //  echo "var_dump session->userdata";
        //  var_dump($this->session->userdata);
        //  ?>
               
<section>
        
               <!-- <br> Vers PAGE BDD... <br>
        <!-- http://lamanu-formationcomplete/CodeIgniterHospital/news  -->
        <!-- <p><a href="<?php echo site_url('news'); ?>">vers Table  NEWS</a></p> --> 

