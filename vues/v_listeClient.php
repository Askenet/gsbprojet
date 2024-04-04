 <div id="contenu">
      <h2>Me(s) client(s)</h2>

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
					$cpt++;
			?>
	            <style>
			      table,th,td{border:1px solid #cccccc}
			    </style>
			  	<body>
			    	<table>
			      		<tr>
			        		<th>Nom</th>
			        		<th>Prénom</th>
			        		<th>Date d'embauche</th>
			      		</tr>
						<tr>
			                <td><?php echo $vNom ?></td>
			                <td><?php echo $vPrenom ?></td>
			                <td><?php echo $vDateDebut ?></td>
			             </tr>

			    	</table>
				</body>
			<?php
				}
			?>
      </form>