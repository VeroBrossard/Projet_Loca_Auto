</section>
<br>

<section>
      

        <?php
        echo "depuis indexCars.php ";
        echo '<br> errors  or not errorsdans la location... <br>';
        echo validation_errors();
        echo 'that is the question ??? ';
        ?>

        <div style="margin:auto;">
                <div class="logoGammeDiv">
                        <img class="logoGamme" src="<?= base_url('assets/img/logo/gamme1.png'); ?>" alt="Logo gamme">
                        <img class="logoGamme" src="<?= base_url('assets/img/logo/gamme2.png'); ?>" alt="Logo gamme">
                        <img class="logoGamme" src="<?= base_url('assets/img/logo/gamme3.png'); ?>" alt="Logo gamme">
                        <img class="logoGamme" src="<?= base_url('assets/img/logo/gamme4.png'); ?>" alt="Logo gamme">
                </div>

        </div>
        <br>depuis form_carsToRent.php<br>
        <?php echo form_open('carsToRent/researchCars') ;
        
        echo (!empty($this->session->userdata['ugamme'])? 'demande dejà  envoyée  et ugamme demandée = ' . $this->session->userdata['ugamme'] .'<br>':'formulaire pas encore envoyé <br>');
        //($gammes) est le résultt de la query sur les gammes
        ?>
        <!-- , array('onsubmit' => "return confirm('Etes vous sûr de valider?')" ) -->


     
        <label for="ugamme">Choisir une GAMME:</label><br>
        <select type="text" name="ugamme" id="ugamme" width="15" title="GAMME">
                <option value="" >GAMME</option>
                <?php

                foreach ($gammes as $gamme_item) :
                ?>
                <option value="<?= $gamme_item['ctr_gamme'] ?>" <?= (!empty($this->session->userdata['ugamme']) && $gamme_item['ctr_gamme'] ==   $this->session->userdata['ugamme'])? 'selected':''; ?>> <?= $gamme_item['ctr_gamme'] ?></option>
                <?php
                endforeach;
                ?>
        </select> <br>


        <!-- 
    <label for="uStartloc">Date naissance</label>
    <input type="date" name="ustartloc" value="<?= !empty($users_item['ctr_id']) ? $users_item['uStartloc'] : set_value('ustartloc'); ?>"/>
    <p><?php echo form_error('uStartloc'); ?></p><br />

    <label for="uEndloc">Date naissance</label>
    <input type="date" name="uEndloc" value="<?= !empty($users_item['u_id']) ? $users_item['uEndloc'] : set_value('uEndloc'); ?>"/>
    <p><?php echo form_error('uEndloc'); ?></p><br /> -->

        <!-- <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="<?= !empty($users_item['u_id']) ? $users_item['u_firstname'] : set_value('firstname'); ?>" size="30" />
    <p><?php echo form_error('firstname'); ?></p><br /> -->
        <!-- 
    <label for="birthdate">Date naissance</label>
    <input type="date" name="birthdate" value="<?= !empty($users_item['u_id']) ? $users_item['u_birthdate'] : set_value('birthdate'); ?>"/>
    <p><?php echo form_error('birthdate'); ?></p><br /> -->
        <!-- 
    <label for="phone">Tel</label>
    <input type="phone" name="phone" value="<?= !empty($users_item['u_id']) ? $users_item['u_phone'] : set_value('phone'); ?>" size="10" />
    <p><?php echo form_error('phone'); ?></p><br /> -->

        <!-- <label for="email">mail</label>
    <input type="email" name="mail" value="<?= !empty($users_item['u_id']) ? $users_item['u_mail'] : set_value('mail'); ?>" size="50" />
    <p><?php echo form_error('mail'); ?></p><br /> -->

        <!-- <label for="pwd">mot de passe</label>
    <input type="password" name="pwd" value="<?= !empty($users_item['u_id']) ? $users_item['u_pwd'] : set_value('pwd'); ?>" size="10" />
    <p><?php echo form_error('pwd'); ?></p><br /> -->


        <input type="submit" name="submit" <br />

        <?php
        echo form_close();
        ?>
</section>
<section>
<?= "depuis indexCars.php "?>
        <h1>Nos voitures </h1>

        <div class="contenairCars">

                <div>

                        <?php

                        foreach ($carsToRent as $cars_item) :
                        ?>
                                <div class="block">
                                        <div class="flip-box">
                                                <div class="flip-box-inner">
                                                        <div class="flip-box-front">
                                                                <!-- style="background-image: url(" <?php echo base_url("assets/img/"); ?>voiture.jpg")" width="270px" -->
                                                                <?= $cars_item['cd_brandSerie']; ?><br>
                                                                <img class="carCard" src="<?= base_url('assets/img/cars/'); ?><?= $cars_item['ctr_img']; ?>" alt="car LOCA-AUTO"><br>


                                                                <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>seats.jpg" alt="car LOCA-AUTO"> <?= $cars_item['cd_seats']; ?>
                                                                <?php
                                                                if ($cars_item['cd_energy'] == 'Diesel') {
                                                                ?>
                                                                        <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>gasoil.jpg" alt="car LOCA-AUTO">
                                                                <?php
                                                                }
                                                                if ($cars_item['cd_energy'] == 'Electrique') {
                                                                ?>
                                                                        <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>electric.jpg" alt="car LOCA-AUTO">
                                                                <?php
                                                                }

                                                                if ($cars_item['cd_energy'] == 'Essence') {

                                                                ?>
                                                                        <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>essence.jpg" alt="car LOCA-AUTO">
                                                                <?php
                                                                }

                                                                ?>
                                                                <?= $cars_item['cd_energy']; ?>

                                                                <img class="logoCars" src="<?= base_url('assets/img/logo/'); ?>gearbox.jpg" alt="car LOCA-AUTO">

                                                                <?= $cars_item['cd_gearbox']; ?>

                                                        </div>
                                                        <div class="flip-box-back"><br>

                                                                <?= $cars_item['cd_type']; ?><br><br>
                                                                <?= $cars_item['ctr_gamme']; ?><br>
                                                                de <?= $cars_item['ctr_year']; ?>
                                                                avec <?= $cars_item['ctr_km']; ?>km <br>
                                                                à partir de <?= $cars_item['ctr_pricePerDay']; ?> €/jr.<br><br>
                                                                <?= $cars_item['ctr_immatriculation']; ?>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        <?php
                        endforeach;
                        ?>
                        <br><br><br>

                        <td colspan="7"> nombre de voitures <?= $total ?> </td>

                </div>

        </div>
</section>