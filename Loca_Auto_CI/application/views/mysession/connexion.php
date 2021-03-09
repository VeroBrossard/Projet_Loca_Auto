<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conexxion</title>
</head>
<body>

<p>message d'en haut : <?= $titre ?></p>
<div style="text-align: center" >
        <?= form_open('mysession/add') ?>
            <!-- <form action="<?php echo site_url('mysession/add') ?>" method="post"> -->
                <input type="text" placeholder="Enter Name" name="uname">
                <input type="text" placeholder="Enter Password" name="upwd">
                <button type="submit">Set Name</button>
            </form>
        </div>
</body>
</html>