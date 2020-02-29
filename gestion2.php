<?php

// Connexion à la base de données
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=footcup2;charset=utf8', 'root', 'otd15');

// die('Erreur : '.$e->getMessage());
//}

// Si tout va bien, on peut continuer

if(isset( $_POST['nomdujoueur']))
{

    $req =$bdd->prepare('UPDATE joueur SET Role_du_joueur = attaquant');
    $req -> execute(array($_POST['nomdujoueur'])); 

}




?>