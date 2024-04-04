<?php


	if(!empty($_POST['statut'])) {
		$selected = $_POST['statut'];
		echo 'You have chosen: ' . $selected;
	} else {
		echo 'Please select the value.';
	}


	
	if(!isset($_REQUEST['action'])){
		$_REQUEST['action'] = 'demandeConnexion';
	}

	$action = $_REQUEST['action'];
	switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		if($selected=='client')
		{
			$visiteur = $pdo->getInfosVisiteur($login,$mdp);
			if(!is_array( $visiteur)){
				ajouterErreur("Login ou mot de passe incorrect");
				include("vues/v_erreurs.php");
				include("vues/v_connexion.php");
			}
			else{
				$id = $visiteur['id'];
				$nom =  $visiteur['nom'];
				$prenom = $visiteur['prenom'];
				connecter($id,$nom,$prenom);
				include("vues/v_sommaire.php");
			}
			break;
		}
		elseif($selected == 'comptable'){
			echo"cc";
			$comptable = $pdo->getInfosComptable($login,$mdp);
			if(!is_array($comptable)){
				ajouterErreur("Login ou mot de passe incorrect");
				include("vues/v_erreurs.php");
				include("vues/v_connexion.php");
			}
			else{
				$id = $comptable['idC'];
				$nom =  $comptable['nomC'];
				$prenom = $comptable['prenomC'];
				connecter($id,$nom,$prenom);
				include("vues/v_sommaireComptable.php");
			}
			break;
		}
		
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
	
}
?>