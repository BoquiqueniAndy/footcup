<!DOCTYPE html>
<?php
  session_start();
?>
<html>
  <head>
  <link rel="stylesheet" href="styles.css">
  <title>Foot Cup &#9917;</title>
  <meta charset="utf-8">
  <img class= "logo" src="FootCup.png" alt="avatar">
  </head>

  <body>
  <ul id="nav">
  <li><a href="accueil.php">Accueil</a> </li>
  <li><a href="inscription1.php">Inscription</a> </li>
  <li><a href="connect.php">Connexion</a> </li>
  <li><a href="Tournoi.php">Tournoi</a> </li>
  <li><a href="gestion.php">Gestion</a> </li>
  <li><a href="creation.php">Création</a> </li>
  <li><a href="admin.php">Admin</a> </li>	
  </ul><br /><br />
  
  <form method="post" action="" >
  <center>
  <?php

    // Connexion à la base de données

    $bdd = new PDO('mysql:host=localhost;dbname=footcup2;charset=utf8', 'root', 'otd15');

    // die('Erreur : '.$e->getMessage());
    //}

    if(!isset($_SESSION['L_id_de_l_utilisateur']) || $_SESSION['L_id_de_l_utilisateur'] != 1){
      exit();
    }

    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table joueur
    $reponse = $bdd->query('SELECT Nom_du_joueur,Prenom_du_joueur,Role_du_joueur FROM joueur');

  ?>
  <?php
    // On affiche chaque entrée une à une avec une boucle TANT QUE
  while ($donnees = $reponse->fetch())
    {

      echo $donnees['Nom_du_joueur']." ".$donnees['Prenom_du_joueur']."<br />";
      echo $donnees['Role_du_joueur']."<br /><br /><br /><br />";

  ?>
  <?php  
    }
  ?>
  <?php

    $reponse->closeCursor(); // Termine le traitement de la requête

  ?>

  
  </form>
  </body>
</html>