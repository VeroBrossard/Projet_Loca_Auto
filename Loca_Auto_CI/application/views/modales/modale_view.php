<a href="#id01">Ouvrir la fenêtre modale</a>

<div id="id01" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <header id="headerMD" class="containerMD"> 
        <a href="#" class="closebtnMD">×</a>
        <h2>Entête de modale</h2>
      </header>
      <div class="containerMD">
        <p>Texte dans la fenêtre modale.</p> 
        <div style="text-align: center" >
        par modale_view.php<br>
        <?= form_open('mysession/add') ?>
            <!-- <form action="<?php echo site_url('mysession/add') ?>" method="post"> -->
                <input type="text" placeholder="Enter Name" name="uname">
                <input type="pwd" placeholder="Enter pwd" name="upwd">
                <button type="submit">Set Name</button>
            </form>
        </div> 
      </div>
      <footer  id="footerMD" class="containerMD">
        <p>Pied de page de modale</p>
      </footer>
    </div>
  </div>
</div> 