<!-- Example code of view showing session name (sess-view.php) -->
<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter Session Demo | techbriefers.com</title>
</head>

<body>
    <div style="text-align: center">


    
        <h1>Welcome <?php echo $this->session->userdata('username'); ?> nom???</h1>
        <?php

echo "<mark>_this->session->ACCES</mark>";
echo $this->session->ACCES; 
        //affiche juste le nom du user

        echo "<mark>vardump de this->session->userdata<br></mark>";
        // (c'est un tableau contenant le tableau _users !!!)";
        var_dump($this->session->userdata);

        echo "<mark>vardump de this->session<br></mark>";
        var_dump($this->session);


        echo "<mark>vardump de this->session->users<br></mark>";
        var_dump($this->session->users);
      // => renvoie TOUTES les var définiees dans Session->user (les miennes donc !!!)

      

// ***************       Ok pour recup var de session       *********************** //
        echo "<mark>vardump de this->session->users['u_mail']</mark><br>";
        var_dump($this->session->users['u_mail']);
       // => renvoie  la var de session u_mail demandée 
;
// ================================================================================ //

        echo '<mark>le titre de $userData est : </mark>' . $title . '<br><br>';
        echo '<mark>affichage des var de session du tableau  _users par foreach  </mark> <br>';

        foreach ($users as $key => $element) 
        {
            echo $key . '=' . $element . '<br />'; 
        }
        ?>

        <mark>pwd (2) depuis : _users['element']   OK!!! </mark>
        <?php echo $users['u_birthdate'];      
        
        ?><br>
        <br><br>
        <a class= "bouton" href="<?php echo site_url('mysession/remove'); ?>" onclick="return confirm('Etes vous sûre de vouloir vous déconnecter ?');"> <mark>Remove Session</mark></a>
    </div>
</body>

</html

<!--  svgarde des varDump de Session dans svgrde_varDump_session.php  -->