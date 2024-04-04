<div id="contenu">
<form method="POST" action="index.php?uc=etatFraisClients&action=valideRechercheClient">
     <h2>Fiche Client de : <?php 
      $resultat = $pdo ->getNomPrenomClientByIdClient($idVisiteur);
      $resFecth = $resultat->fetch();
      $nomClient = $resFecth[0];
      $prenomClient = $resFecth[1];
      echo $nomClient."  ".$prenomClient  ?></h2>
     <!-- <form method="POST" action="index.php?uc=etatFraisClients&action=valideRechercheClient"> -->
     <p>
     	<h3>Sélectionner le mois : </h3>

<label for="lstMois" accesskey="n">Mois : </label>
     <select id="lstMois" name="lstMois">
         <?php
         $resultat = $pdo -> getLesMoisDisponibles($idVisiteur);
         foreach ($resultat as $unMois)
         {
            $mois = $unMois['mois'];
            $numAnnee =  $unMois['numAnnee'];
            $numMois =  $unMois['numMois'];
            if($mois == $moisASelectionner){
              ?>
              <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
              <?php 
            }
            else{ 
              ?>
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
