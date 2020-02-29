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
    $req= $bdd->prepare('INSERT INTO tournois (Nom_du_Tournois, Ville) VALUES(?, ?)');
    $req->execute(array($_POST['nomtournois'], $_POST['ville']));


?>
  <form action="creat.php" method="post">

    <center> <input type="text"  id="nomequipe1"  name="nomequipe1"  placeholder="nom d'équipe" required/> </center><br />
      <center> <input type="text"  id="nomjoueur1"  name="nomjoueur1"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur1"  name="prenomjoueur1"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role1"  name="role1"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur2"  name="nomjoueur2"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur2"  name="prenomjoueur2"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role2"  name="role2"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur3"  name="nomjoueur3"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur3"  name="prenomjoueur3"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role3"  name="role3"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur4"  name="nomjoueur4"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur4"  name="prenomjoueur4"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role4"  name="role4"  placeholder="rôle du joueur" required/> </center><br /><br />



    <HR width=400px align=center >

    <center> <input type="text"  id="nomequipe2"  name="nomequipe2"  placeholder="nom d'équipe" required/> </center><br />
      <center> <input type="text"  id="nomjoueur5"  name="nomjoueur5"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur5"  name="prenomjoueur5"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role5"  name="role5"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur6"  name="nomjoueur6"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur6"  name="prenomjoueur6"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role6"  name="role6"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur7"  name="nomjoueur7"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur7"  name="prenomjoueur7"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role7"  name="role7"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur8"  name="nomjoueur8"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur8"  name="prenomjoueur8"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role8"  name="role8"  placeholder="rôle du joueur" required/> </center><br /><br />


    <HR width=400px align=center >

    <center> <input type="text"  id="nomequipe3"  name="nomequipe3"  placeholder="nom d'équipe" required/> </center><br />
      <center> <input type="text"  id="nomjoueur9"  name="nomjoueur9"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur9"  name="prenomjoueur9"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role9"  name="role9"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur10"  name="nomjoueur10"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur10"  name="prenomjoueur10"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role10"  name="role10"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur11"  name="nomjoueur11"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur11"  name="prenomjoueur11"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role11"  name="role11"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur12"  name="nomjoueur12"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur12"  name="prenomjoueur12"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role12"  name="role12"  placeholder="rôle du joueur" required/> </center><br /><br />

    
    <HR width=400px align=center >

    <center> <input type="text"  id="nomequipe4"  name="nomequipe4"  placeholder="nom d'équipe" required/> </center><br />
      <center> <input type="text"  id="nomjoueur13"  name="nomjoueur13"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur13"  name="prenomjoueur13"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role13"  name="role13"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur14"  name="nomjoueur14"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur14"  name="prenomjoueur14"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role14"  name="role14"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur15"  name="nomjoueur15"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur15"  name="prenomjoueur15"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role15"  name="role15"  placeholder="rôle du joueur" required/> </center><br /><br />

      <center> <input type="text"  id="nomjoueur16"  name="nomjoueur16"  placeholder="Nom du joueur" required/> </center>
      <center> <input type="text"  id="prenomjoueur16"  name="prenomjoueur16"  placeholder="Prenom du joueur" required/> </center>
      <center> <input type="text"  id="role16"  name="role16"  placeholder="rôle du joueur" required/> </center><br /><br />
    

      <center><input type="submit" value="Création de vos équipes !"></center>

  </form>
  </body>
</html>