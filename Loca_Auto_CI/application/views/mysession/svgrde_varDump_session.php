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
        //affiche juste le nom du user

        echo "<mark>vardump de this->session->userdata<br></mark>";
        // (c'est un tableau contenant le tableau _users !!!)";
        var_dump($this->session->userdata);

                //  *******  ne fonctionne pas !!!
        // echo "<mark>vardump de this->session->userdata->users<br></mark>";
        // var_dump($this->session->userdata->users);
     

        echo "<mark>vardump de this->session<br></mark>";
        var_dump($this->session);


        echo "<mark>vardump de this->session->users<br></mark>";
        var_dump($this->session->users);
      // => renvoie TOUTES les var définiees dans Session->user (les miennes donc !!!)

        //  *******  ne fonctionne pas !!!
        // echo "vardump de username (var des session this->session->$username??? <br>";
        // var_dump($this->session->$username);

//  *******  ne fonctionne pas !!!
        // var_dump($username);
        // echo "vardump de _users <br>";
        // var_dump($users);

            // ******** ok pour recup var de session   **** //
        echo "<mark>vardump de this->session->users['u_mail']</mark><br>";
        var_dump($this->session->users['u_mail']);
       // => renvoie  la var de session  demandée 


        //  *******  ne fonctionne pas !!!
        // $this->session->nomVar;
        // echo "vardump de this->session->userdata['_users]'";
        // var_dump($this->session->userdata['u_mail']);

        echo '<mark>le titre de $userData est : </mark>' . $title . '<br><br>';
        echo '<mark>affichage des var de session du tableau  _users par foreach  </mark> <br>';
        foreach ($users as $key => $element) {

            echo $key . '=' . $element . '<br />'; // affichera 

        }
        
echo '<pre>';

print_r($users);

echo '</pre>';

        //  *******  ne fonctionne pas !!!
// echo $users['username'].'<br>';
        ?>
        <!-- depuis sess-form.php<br>
        //  *******  ne fonctionne pas !!! -->
        <!-- <mark>pwd (1) depuis : _this->session->userdata('userpwd')</mark>
        <?php echo $this->session->userdata('u_pwd'); ?><br> -->


        <mark>pwd (2) depuis : _users['element'] </mark>
        <?php echo $users['u_birthdate']; 
        
        $maVar = $this->session->user ;
        echo ' <mark> _mavar </mark>' . $maVar. '<br>';
        
        ?><br>



        <a href="<?php echo site_url('mysession/remove'); ?>">Remove Session</a>
    </div>
</body>

</html