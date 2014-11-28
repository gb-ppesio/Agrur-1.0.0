<?php
	function afficher($idproducteur){

                        $connect = mysqli_connect("127.0.0.1","root","","agrur");
                        $req = "SELECT * from producteur WHERE prodID = $idproducteur";
                        $sql = mysqli_query($connect,$req);
                        //$ligne = mysqli_fetch_assoc($sql)                                              
                    
                         while($ligne = mysqli_fetch_assoc($sql)){
                        ?>
                    <h4>Societe </h4>
                    <p>
                        <p> Raison Sociale : <?php echo $ligne['prodSociete'] ?></p>
                        <p> Adresse : <?php echo $ligne['prodAdresse'] ?></p>
                        <p> Responsable : <?php echo $ligne['prodNomResp'].' '.$ligne['prodPrenomResp'] ?></p>
                        <p> Adhérent : <?php 
                            if(is_null($ligne['prodDateAdhesion'])){
                                            echo 'Non';
                                        }
                                        else{
                                            echo 'Depuis le '.date("d/m/Y", strtotime($ligne['prodDateAdhesion']));
                                        }
                                    }
                        ?></p>
                    <?php
                        $req2 = "SELECT C.communeNom, Va.varLibelle, Ve.vergerSuperficie, Ve.vergerNbArbre, Va.varAOC, C.communeAOC FROM variete Va, commune C, verger Ve WHERE Ve.prodID = $idproducteur AND Ve.varID = Va.varID AND Ve.commuID = C.communeID ORDER BY C.communeNom";
                        //<p> <input type="submit" name="modifierInfo" value ="Modifier mes informations"></p>
                        $sql2 = mysqli_query($connect, $req2);
                    ?>
                        <h4><br> VERGERS </h4>
                        <table>
                            <tr>
                                <th> Commune </th>
                                <th> Variété </th>
                                <th> Superficie en hectares </th>
                                <th> Nombres d'arbres </th>
                                <th> AOC </th>               
                            </tr>
                            
                                <?php
                                    $nbtotalHa = 0;
                                    $nbtotalArbres = 0;
                                    while($ligne2 = mysqli_fetch_assoc($sql2)){
                                        echo'<tr>';
                                        echo'<td>'.$ligne2['communeNom'].'</td>';
                                        echo'<td>'.$ligne2['varLibelle'].'</td>';
                                        echo'<td>'.number_format($ligne2['vergerSuperficie'], 0, ',', ' ').'</td>';
                                        echo'<td>'.number_format($ligne2['vergerNbArbre'], 0, ',', ' ').'</td>';
                                        if (($ligne2['varAOC']+$ligne2['communeAOC'])==2){
                                            echo'<td> Oui </td>';
                                        }                       
                                        else{
                                            echo'<td> Non </td>';
                                        } 
                                        echo'</tr>';
                                        $nbtotalHa += $ligne2['vergerSuperficie'];
                                        $nbtotalArbres += $ligne2['vergerNbArbre']; 
                                    }
                                ?>
                        </table>
                        <p><strong><?php echo number_format($nbtotalHa, 0, ',', ' ').' hectares de terrain'?></strong></p>
                        <p><strong><?php echo number_format($nbtotalArbres, 0, ',', ' ').' arbres plantés'?></strong></p>

                    <h4><br> LIVRAISONS </h4>
                    <?php
                        $req3 = "SELECT livrDate, livrProduit, livrQte FROM Livraison WHERE prodID = $idproducteur ORDER BY livrDate";
                        //<p> <input type="submit" name="modifierInfo" value ="Modifier mes informations"></p>
                        $sql3 = mysqli_query($connect, $req3);
                    ?>
                        <table>
                            <tr>
                                <th> Livré le </th>
                                <th> Produit</th>
                                <th> Quantité en kilos </th>              
                            </tr>
                            
                                <?php
                                    $nbtotalQte = 0;
                                    while($ligne3 = mysqli_fetch_assoc($sql3)){
                                        echo'<tr>';
                                        echo'<td>'.date("d/m/Y", strtotime($ligne3['livrDate'])).'</td>';
                                        echo'<td> Noix '.$ligne3['livrProduit'].'</td>';
                                        echo'<td>'.number_format($ligne3['livrQte'], 0, ',', ' ').'</td>';
                                        echo'</tr>';
                                        $nbtotalQte += $ligne3['livrQte'];
                                    }
                                ?>
                        </table>
                        <p><strong><?php echo number_format($nbtotalQte/100, 3, ',', ' ').' tonnes de noix livrés'?></strong></p>

                        <h4><br> CERTIFICATIONS </h4>
                    <?php
                        $req4 = "SELECT certNom, certDate FROM Certification WHERE prodID = $idproducteur ORDER BY certDate";
                        //<p> <input type="submit" name="modifierInfo" value ="Modifier mes informations"></p>
                        $sql4 = mysqli_query($connect, $req4);
                        if (mysqli_num_rows($sql4)==0){
                            echo'Aucunes certifications';
                        }
                        else{
                    ?>
                        <table>
                            <tr>
                                <th> Date </th>
                                <th> Nomination</th>             
                            </tr>
                            
                                <?php
                                    while($ligne4 = mysqli_fetch_assoc($sql4)){
                                        echo'<tr>';
                                        echo'<td>'.date("d/m/Y", strtotime($ligne4['certDate'])).'</td>';
                                        echo'<td>'.$ligne4['certNom'].'</td>';                                        
                                        echo'</tr>';
                                        
                                    }
                                }
                                ?>
                        </table>
    <?php
	}
	?>