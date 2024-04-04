<?php
//COMPTABLE 
include("vues/v_sommaireComptable.php");

$idComptable = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr($mois,0,4);
$numMois =substr($mois,4,2);
$action = $_REQUEST['action'];
switch($action){
	case 'voirClient':{
			$lesInfosClients = $pdo->getClientDeComptable($idComptable);
			
			include("vues/v_listeClient.php");
		}
		break;
}
?>