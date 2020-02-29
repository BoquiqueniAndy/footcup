<html>
<head>
    <meta charset="utf-8" />
		
    <link rel="stylesheet" href="styles.css">

    <title>liste</title>

    <meta charset="utf-8">

    
		
</head>

<body>
<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=footcup2;charset=utf8', 'root', 'otd15');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table joueur
$reponse = $bdd->query('SELECT * FROM joueur');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Joueur</strong> : <?php echo $donnees['Numero_du_joueur']; ?><br />
    Le nom du joueur est  <?php echo $donnees['Nom_du_joueur']; ?> <br />
	Le prénom du joueur est  <?php echo $donnees['Prenom_du_joueur']; ?> <br />
    Son role est : <?php echo $donnees['Role_du_joueur']; ?> <br />
	<strong>Participe au Tournoi </strong> : <?php echo $donnees['Numero_Tournois']; ?><br />
	<strong>Appartient à l'équipe  </strong> : <?php echo $donnees['Numero_de_l_equipe']; ?><br />
	
    
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>
</html>