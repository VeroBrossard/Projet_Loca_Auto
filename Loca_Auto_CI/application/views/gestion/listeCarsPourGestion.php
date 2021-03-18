<?php
//echo 'ma page arborescence : views/patients/view.php ';
// hello();
var_dump($carsToRent);
echo ' depuis listeCarspourGestion.php /// 1car par id <br><br><br>';
// echo 'id voiture = ' .$cars_item['ctr_id']. "<br>";


?>
<table>
                                <thead>
                                        <tr>
                                                <th>gamme</th>
                                                <th>immat.</th>
                                                <th>€/jr</th>
                                                <th> km </th>
                                                <th>year</th>
                                                <th>img</th>
                                                <th>arch?</th>
                                                <th>Marque</th>
                                                <th>type</th>
                                                <th>seats</th>
                                                <th>gearbox</th>
                                                <th>energy</th>
                                                <th>mileage</th>
                                                <th>Détails</th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php

foreach ($carsToRent as $cars_item) :
?>
                        <tr>
                                <td><?= $cars_item['ctr_gamme']; ?></td>
                                <td><?= $cars_item['ctr_immatriculation']; ?></td>
                                <td><?= $cars_item['ctr_pricePerDay']; ?></td>
                                <td><?= $cars_item['ctr_km']; ?></td>
                                <td><?= $cars_item['ctr_year']; ?></td>
                                <td><?= $cars_item['ctr_img']; ?></td>
                                <td><?= $cars_item['ctr_toArchive']; ?></td>
                                <td><?= $cars_item['cd_brandSerie']; ?></td>
                                <td><?= $cars_item['cd_type']; ?></td>
                                <td><?= $cars_item['cd_seats']; ?></td>
                                <td><?= $cars_item['cd_gearbox']; ?></td>
                                <td><?= $cars_item['cd_energy']; ?></td>
                                <td><?= $cars_item['cd_mileage']; ?></td>
                                <!-- <td><a href="<?= site_url('mysession/view_1car/' . $cars_item['ctr_id']); ?>">détails</a></td>                                                 -->
                        </tr>
   <?php

endforeach ;
?>
                                </tbody>
 
                                <tr><td colspan="14" height="20px"></td></tr>
                                <tfoot>
                                  <tr>    
                                  <td colspan="7"  style="text-align:right;"><a class="bouton" href="<?php echo site_url('carsToRent/delete_1carToRent/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir supprimer cette voiture ?');" >Supprimer</a> </td>
                                    
                                  <td colspan="7" ><a class="bouton" href="<?php echo site_url('carsToRent/create/'.$cars_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture ?');" >Modifier</a>
                                </td>
                              </tr>
                              
                              </tfoot>

                        </table>