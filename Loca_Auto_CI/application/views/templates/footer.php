</section><br>
<hr />
<footer><br>
<?
echo 'appel de fonction hello()';
echo hello();

//$cookie= get_cookie('remember_me');  
//var_dump($cookie);      
?>
<?php //echo get_cookie(); ?>
<!-- <a href="JavaScript:window.close()">Close</a> -->
<!-- <a href="javascript:history.go(-1)">Retour</a> <br><br> -->
<a class="bouton" href="<?php echo site_url('mysession/'); ?>">retour HOME</a> <br><br>
<em>&copy; 2021 by VB</em>
</footer>
        </body>
</html>