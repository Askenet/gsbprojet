    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Comptable :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=gererClients&action=voirClient" title="Mes clients cc :D"Voir client>Voir clients</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFraisClients&action=voirFrais" title="Consultation des frais du client">Voir frais clients</a>
           </li>
 	         <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    
    