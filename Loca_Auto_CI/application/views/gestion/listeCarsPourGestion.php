<?php
//echo 'ma page arborescence : views/patients/view.php ';
// hello();
//var_dump($carsToRent);
echo ' depuis listeCarspourGestion.php appel par index de Gestion.php  <br><br><br>';
// echo 'id voiture = ' .$cars_item['ctr_id']. "<br>";

//recuperation de _carsToRent depuis index.php
?>
<table>
                                <thead>
                                        <tr>
                                                <th>cars id</th>
                                                <th>immatriculation.</th>
                                                <th>gamme</th>
                                                <th>Marque</th>
                                                <th>Prix/jr</th>
                                                <th> kilomètrage </th>
                                                <th>année</th>
                                                <th>img</th>
                                                <th>type</th>
                                                <!-- <th>seats</th>
                                                <th>gearbox</th>
                                                <th>gearbox</th>
                                                <th>energy</th> -->
                                                <th>A archiver?</th>
                                                <th>Modifier</th>
                                                <th>Supprimer</th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php

foreach ($carsToRent as $cars_item) :
?>
                        <tr>
                                <td><?= $cars_item['ctr_id']; ?></td>
                                <td><?= $cars_item['ctr_immatriculation']; ?></td>
                                <td><?= $cars_item['ctr_gamme']; ?></td>
                                <td><?= $cars_item['cd_brandSerie']; ?></td>
                                <td><?= $cars_item['ctr_pricePerDay']; ?></td>
                                <td><?= $cars_item['ctr_km']; ?></td>
                                <td><?= $cars_item['ctr_year']; ?></td>
                                <td><?= $cars_item['ctr_img']; ?></td>
                                <td><?= $cars_item['cd_type']; ?></td>
                                <td><?= $cars_item['ctr_toArchive']; ?></td>
                                <!-- <td><?= $cars_item['cd_seats']; ?></td> -->
                                <!-- <td><?= $cars_item['cd_gearbox']; ?></td>
                                <td><?= $cars_item['cd_energy']; ?></td>
                                <td><?= $cars_item['cd_mileage']; ?></td> -->
                                <td><a href="<?= site_url('gestion/view_1car/' . $cars_item['ctr_id']); ?>">modifier<a></td> 


                                <!-- //<td><a href="<?= site_url('carsToRent/modify/' . $cars_item['ctr_id']); ?>">modifier<a><td>  -->

                                <td>suppr.</td>                                               
                        </tr>
<?php

endforeach ;
?>
                                </tbody>
 
                                <tr><td colspan="15" height="20px"></td></tr>
                                <tfoot>
                                 <tr>
                                         <td colspan="6" > Nombre voitures dans le park : <?=$total_carsToRent ?></td>
                                         
                                          <td colspan="2"  style="text-align:right;"><a class="bouton" href="<?php echo site_url('carsToRent/delete_1carToRent/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir supprimer cette voiture ?');" >Supprimer</a> </td>
                                         
                                          <td colspan="6" ><a class="bouton" href="<?php echo site_url('carsToRent/modify/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture ?');" >Modifier</a>
                                                                         </td>
                                                                       </td>
                                 </tr>
                              
                              </tfoot>

                        </table>