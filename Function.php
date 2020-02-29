<html>
<select name="rolej" id="rolej">
<form method="POST" action="">
<option value="gardien">gardien</option>
<option value="défenseur">défenseur</option>
<option value="attaquant">attaquant</option>
<option value="milieu">milieu</option> 
 
<?php
	// Connexion à la base de données

    //$bdd = new PDO('mysql:host=localhost;dbname=footcup2;charset=utf8', 'root', 'root');

    // die('Erreur : '.$e->getMessage());
    //}

    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table joueur
    //$reponse = $bdd->query('SELECT Role_du_joueur FROM joueur');

	//$resultat = $reponse->setFetchmode(PDO::FETCH_OBJ);
 
	    //while ($row = $resultat->fetch() )
			//{
 
				//echo "<option value=\"".$row["Role_du_joueur"]."\">".$row["Role_du_joueur"]."</option>\n";
			//}
 
	//echo ("</select>");
	//echo "<input type = 'submit' value = 'Valider'>";
	//echo ("</form>");
 
    //$prep->closeCursor();
    isset($_POST['rolej']) && !empty($_POST['rolej']{

        echo $_POST['rolej'];
    }

?>
</form>
</html>