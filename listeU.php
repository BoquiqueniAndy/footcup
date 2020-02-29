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

// On récupère tout le contenu de la table utilisateurs
$reponse = $bdd->query('SELECT * FROM utilisateur');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Utilisateur</strong> : <?php echo $donnees['L_id_de_l_utilisateur']; ?><br />
    Le pseudo de l'utilisateur est : <?php echo $donnees['pseudo']; ?> <br />
	Le mail de l'utilisateur est : <?php echo $donnees['mail']; ?> <br />
    Son mot de passe est : <?php echo $donnees['motdepasse']; ?> <br />
    
   </p>
   
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
<center> <a href="admin.php">Retour à la page admin</a> </center>
</body>
</html>