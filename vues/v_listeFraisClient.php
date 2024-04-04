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
    </p>
        <input type="submit" value="Rechercher" name="rechercher">
    </p>
            </form>


   	
