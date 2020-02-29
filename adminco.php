<html>
<head>
    <meta charset="utf-8" />
		
    <link rel="stylesheet" href="styles.css">

    <title>admin</title>

    <meta charset="utf-8">

    <img class= "logo" src="FootCup.png" alt="avatar">
		
</head>

<body>
<center>
<?php
    // Connexion à la base de données

    $bdd = new PDO('mysql:host=localhost;dbname=footcup2;charset=utf8', 'root', 'otd15');

    // die('Erreur : '.$e->getMessage());
    //}

    $NA = $_POST['nomadmin'];
    $MDPA = $_POST['mdpadmin'];
    $sqlotd = "SELECT Ientifiant_d_administrateur,Mot_de_passe_d_administrateur FROM administrateur;";
    $rotd = $bdd->query($sqlotd);

    if(isset($NA) AND isset($MDPA)  ){

        echo "Bienvenue ".$NA;

    }else{
        exit();
    }



?></center><br />

<ul id="nav">
    <li><a href="accueil.php">Accueil</a> </li>
    <li><a href="listeU.php">Utilisateurs</a></li>
    <li><a href="listeEquipe.php">Equipes</a> </li>
    <li><a href="listeJ.php">Joueurs</a> </li>
	
</ul>

</body>
</html>


                 
                  
            
            
           



</body>

</html>