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

// On récupère tout le contenu de la table équipe
$reponse = $bdd->query('SELECT * FROM equipe');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>équipe</strong> : <?php echo $donnees['Numero_de_l_equipe']; ?><br />
    Le nom de l'équipe est : <?php echo $donnees['Nom_de_l_equipe']; ?>, et appartient au tournois <?php echo $donnees['Numero_Tournois']; ?> <br />
    
    
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>