</section>
<br>
<section style="background-color:brown;"> 
        <div >titre depuis data ??
          <?= $title ?>
                <div> echec_verif conn.php   appel depuis  mySession************</p>
                var_dump de $users
               <?php
                var_dump($users);
if(empty($users)){

  echo "il y a un pb , vous semblez n'être pas inscrit <br>
  
  pwd oublié ??<br>";
}
else{


                echo 'id patient = ' .$users['u_id']. "<br>";
                echo 'count= ' .count($users). "<br>";
                ?>
                </div>
                <div>
 
</section>
<?php
}
?>