</section><br>
<hr />
<footer><br>
<?php
echo 'appel de fonction hello() depuis footer_home';
 hello();

//$cookie= get_cookie('remember_me');  
//var_dump($cookie);      
?>
<br>
<!-- <a href="JavaScript:window.close()">Close</a> -->
<!-- <a href="javascript:history.go(-1)">Retour</a> <br><br> -->
<a class="bouton" href="<?php echo site_url('mysession/'); ?>">retour HOME</a> <br><br>
<em>&copy; 2021 by VB</em>
</footer>
        </body>
</html>