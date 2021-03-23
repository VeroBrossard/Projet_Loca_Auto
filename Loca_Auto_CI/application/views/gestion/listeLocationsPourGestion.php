<?php
//echo 'ma page arborescence : views/patients/view.php ';
// hello();
//var_dump($carsToRent);
echo ' depuis listeLocationspourGestion.php appel par index de Gestion.php  <br>';
// echo 'id voiture = ' .$locs_item['ctr_id']. "<br>";

echo "pour affichage données de location"
?>
<table>
                                <thead>
                                        <tr>
                                               <th>loc id</th>
                                                <th>cars id</th>
                                                <th>immatriculation.</th>
                                                <th>gamme</th>
                                                <th>Marque</th>
                                                <th>type</th>
                                                <th>Prix/jr</th>
                                                <th>km voiture</th>

                                                <th>date début</th>
                                                <th>date fin</th>
                                                <th>date réelle</th>
                                                <th>km prévus</th>
                                                <th>km réels</th>
       
                                                <th>Etat</th>
                                                <th>Amount</th>
                                                <th>A archiver?</th>
                                                
                                                <th>Modifier</th>
                                                <th>Supprimer</th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php

foreach ($locations as $locs_item) :
?>
                                <tr>
                                        <td><?= $locs_item['l_id']; ?></td>
                                        <td><?= $locs_item['ctr_id']; ?></td>
                                        <td><?= $locs_item['ctr_immatriculation']; ?></td>
                                        <td><?= $locs_item['ctr_gamme']; ?></td>
                                        <td><?= $locs_item['cd_brandSerie']; ?></td>
                                        <td><?= $locs_item['cd_type']; ?></td>

                                        <td><?= $locs_item['ctr_pricePerDay']; ?></td>
                                        <td><?= $locs_item['ctr_km']; ?></td>

                                        <td><?= $locs_item['l_startDate']; ?></td>
                                        <td><?= $locs_item['l_endDate']; ?></td>
                                        <td><?= $locs_item['l_realReturnDate']; ?></td>

                                        <td><?= $locs_item['l_plannedKm']; ?></td>
                                        <td><?= $locs_item['l_realKm']; ?></td>

                                        <td><?= $locs_item['ls_statement']; ?></td>
                                        <td><?= $locs_item['l_billingAmount']; ?></td>
                                        <td><?= $locs_item['l_toArchive']; ?></td>


                                        <td><a href="<?php echo site_url('carsToRent/create/'.$locs_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture A FINIR LEWEL?');" >Modifier</a><td> 
                                        <td>suppr.</td>                                               
                                </tr>
   <?php

endforeach ;
?>
                                </tbody>
 
                                <tr><td colspan="15" height="20px"></td></tr>
                                <tfoot>
                                 <tr>
                                         <td colspan="6" > Nombre locations  : <?=$total_Locations ?></td>
                                         
                                          <td colspan="2"  style="text-align:right;"><a class="bouton" href="<?php echo site_url('carsToRent/delete_1carToRent/'.$locs_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir supprimer cette voiture A FINIR  LEWEL?');" >Supprimer</a> </td>
                                         
                                          <td colspan="6" ><a class="bouton" href="<?php echo site_url('carsToRent/create/'.$locs_item['ctr_id']); ?>" onclick="return confirm('Etes vous sûre de vouloir modifier cette voiture A FINIR LEWEL?');" >Modifier</a>
                                                                         </td>
                                                                       </td>
                                 </tr>
                              
                              </tfoot>

                        </table>