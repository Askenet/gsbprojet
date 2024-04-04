<div id="contenu">
     <h2>Me(s) fiche(s) client(s)</h2>
     <form method="POST" action="index.php?uc=etatFraisClients&action=valideRechercheClient">
     <p>
     	<h3>Sélectionner le client : </h3>
          <select name="infoClient">
          <?php
      			$cpt = 0;
				foreach ($lesInfosClients as $unClient)
				{	
					//$arrLength = count($lesInfosClients);
					//echo($arrLength);
					//$flipped = array_flip($lesInfosClients);
					//print_r($flipped);
					//print_r($unClient);

					//echo($lesInfosClients[0]['nom']);
					$vNom = $lesInfosClients[$cpt]['nom'];
					$vPrenom = $lesInfosClients[$cpt]['prenom'];
					$vDateDebut = $lesInfosClients[$cpt]['dateDebutService'];
					//$vIdClient = $unClient[$cpt]['idClient'];
					$cpt++;
                    

					
                    
			?>
                <option value="<?php echo $vNom," ",$vPrenom ?>"><?php echo $vNom," ",$vPrenom;?></option>
			<?php
				}
			?>
           <p>
	  
     </select>
   </p> 
   <h3>Sélectionner le mois : </h3>

<label for="lstMois" accesskey="n">Mois : </label>
     <select id="lstMois" name="lstMois">
         <?php
         foreach ($lesMois as $unMois)
         {
           $mois = $unMois['mois'];
             $numAnnee =  $unMois['numAnnee'];
             $numMois =  $unMois['numMois'];
             if($mois == $moisASelectionner){
             ?>
             <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
             <?php 
             }
             else{ ?>
             <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
             <?php 
             }
         
         }
        
        ?>
        <p>
        </select>
        </p>      
    </p>
        <input type="submit" value="Rechercher" name="rechercher">
    </p>
            </form>


   	
