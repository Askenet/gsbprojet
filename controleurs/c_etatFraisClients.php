<?php
//COMPTABLE 
include("vues/v_sommaireComptable.php");
$idComptable = $_SESSION['idVisiteur'];

$mois = getMois(date("d/m/Y"));
$numAnnee =substr($mois,0,4);
$numMois =substr($mois,4,2);
$action = $_REQUEST['action'];

$resultat = $pdo->getIdVisiteurByIdComptable($idComptable);
$resFecth = $resultat->fetch();
$idVisiteur = $resFecth[0];

$resultat = $pdo ->getNomPrenomClientByIdClient($idVisiteur);
$resFecth = $resultat->fetch();
$nomClient = $resFecth[0];
$prenomClient = $resFecth[1];


//echo ($prenomClient);
if(!empty($_POST['infoClient'])) {
	$selected = $_POST['infoClient'];
	echo 'You have chosen: ' . $selected;
} else {
	echo 'Please select the value.';
}



switch($action){
	case 'voirFrais':{
		$lesInfosClients = $pdo->getClientDeComptable($idComptable);
		//$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		//$lesCles = array_keys( $lesMois );
		//$moisASelectionner = $lesCles[0];

        include("vues/v_listeFraisClient.php");
		break;
    }
	case 'valideRechercheClient':{

		$output = explode (' ',$selected);
		$nomClient = $output[0];
		$prenomClient = $output[1];

		$resultat = $pdo->getIdVisiteurByNamePrenom($nomClient,$prenomClient);
		//$resFecth = $resultat->fetchAll();
		$idVisiteur = $resultat[0];

		//echo($idVisiteur);
		include("vues/v_listeMoisClient.php");
		//$leMois = $_REQUEST['lstMois']; 
		//$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		//$moisASelectionner = $leMois;
		//$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		//$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
		//$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);

		//$libEtat = $lesInfosFicheFrais['libEtat'];
		//$montantValide = $lesInfosFicheFrais['montantValide'];
		//$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		//$dateModif =  $lesInfosFicheFrais['dateModif'];
		//$dateModif =  dateAnglaisVersFrancais($dateModif);
		//include("vues/v_etatFrais.php");
		
	}
}
?>