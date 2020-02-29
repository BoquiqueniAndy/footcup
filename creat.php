<!DOCTYPE html>
<?php

  session_start();

?>
<html>
  <head>


    <title>Foot Cup &#9917;</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <img class= "logo" src="FootCup.png" alt="avatar">

    
  </head>
  <body>
  <?php
    // Connexion à la base de données

    $bdd = new PDO('mysql:host=localhost;dbname=footcup2;charset=utf8', 'root', 'otd15');

    // die('Erreur : '.$e->getMessage());
    //}
    // Insertion du message à l'aide d'une requête préparée
 
    $req1= $bdd->prepare('INSERT INTO equipe (Nom_de_l_equipe) VALUES(?)');
    $req1->execute(array($_POST['nomequipe1']));

    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur1'], $_POST['prenomjoueur1'], $_POST['role1']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur2'], $_POST['prenomjoueur2'], $_POST['role2']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur3'], $_POST['prenomjoueur3'], $_POST['role3']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur4'], $_POST['prenomjoueur4'], $_POST['role4']));




    $req1= $bdd->prepare('INSERT INTO equipe (Nom_de_l_equipe) VALUES(?)');
    $req1->execute(array($_POST['nomequipe2']));

    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur5'], $_POST['prenomjoueur5'], $_POST['role5']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur6'], $_POST['prenomjoueur6'], $_POST['role6']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur7'], $_POST['prenomjoueur7'], $_POST['role7']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur8'], $_POST['prenomjoueur8'], $_POST['role8']));




    $req1= $bdd->prepare('INSERT INTO equipe (Nom_de_l_equipe) VALUES(?)');
    $req1->execute(array($_POST['nomequipe3']));

    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur9'], $_POST['prenomjoueur9'], $_POST['role9']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur10'], $_POST['prenomjoueur10'], $_POST['role10']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur11'], $_POST['prenomjoueur11'], $_POST['role11']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur12'], $_POST['prenomjoueur12'], $_POST['role12']));




    $req1= $bdd->prepare('INSERT INTO equipe (Nom_de_l_equipe) VALUES(?)');
    $req1->execute(array($_POST['nomequipe4']));

    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur13'], $_POST['prenomjoueur13'], $_POST['role13']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur14'], $_POST['prenomjoueur14'], $_POST['role14']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur15'], $_POST['prenomjoueur15'], $_POST['role15']));


    $req2= $bdd->prepare('INSERT INTO joueur (Nom_du_joueur, Prenom_du_joueur, Role_du_joueur) VALUES(?, ?, ?)');
    $req2->execute(array($_POST['nomjoueur16'], $_POST['prenomjoueur16'], $_POST['role16']));


    

 
?>


    <img class="homer" src="toto.gif" alt=""><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <center><?php echo"WOUOUUUUH ton tournois OTD est bien enregistré" ;
    ?></center>
    <center> <a href="accueil.php">Retour à l'accueil</a> </center>	
  </body>
</html>