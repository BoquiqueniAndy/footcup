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

    // On récupère l'entrée et on la stocke dans un tableau.
    $sql1 = "SELECT Nom_de_l_equipe FROM equipe where Numero_de_l_equipe LIKE '1'";
    $rqt1 = $bdd->query($sql1);
  
    //Rangement dans un tableau associatif des données importées de la base de données.
    $rR1 = $rqt1->fetchall(PDO::FETCH_ASSOC);
  ?>
  <?php 
      foreach ($rR1 as $ligne1)
      {

      } 
  ?>
  </center>
  <center>
  <?php
    // On récupère l'entrée et on la stocke dans un tableau.
    $sql2 = "SELECT Nom_de_l_equipe FROM equipe where Numero_de_l_equipe LIKE '2'";
    $rqt2 = $bdd->query($sql2);
  
    //Rangement dans un tableau associatif des données importées de la base de données.
    $rR2 = $rqt2->fetchall(PDO::FETCH_ASSOC);
  ?>
  <?php 
      foreach ($rR2 as $ligne2)
      {
  
        print $ligne1["Nom_de_l_equipe"]." "." vs "." ".$ligne2["Nom_de_l_equipe"];
  
      } 
  ?>
  <center> <input type="text"  id="nbbut1"  name="nbbut1"  placeholder="Nombre de but" required/> 
  <input type="text"  id="nbbut2"  name="nbbut2"  placeholder="Nombre de but" required/> </center><br />  
  <?php
    if(isset($ligne1["Nom_de_l_equipe"]) && isset($ligne2["Nom_de_l_equipe"]))
    {

      if(isset($_POST["nbbut1"]) && isset($_POST["nbbut2"]))
      {
        
        if($_POST["nbbut1"] > $_POST["nbbut2"])
        {
          echo "Le vainqueur du match est"." ".$ligne1["Nom_de_l_equipe"];

        }elseif($_POST["nbbut1"] < $_POST["nbbut2"])
        {
          echo "Le vainqueur du match est"." ".$ligne2["Nom_de_l_equipe"];
        }else
        {
          echo "Match nul"." "." entre ".$ligne1["Nom_de_l_equipe"]." "." et "." ".$ligne2["Nom_de_l_equipe"]." ".
          "les possibilitées pour les équipes , de se départageaient sont : la prologation, 
          le but en or ou les tir aux buts.";

        }        

      }

    }
  ?><br /><br /><br /><br />
  <center>
  <?php
    // On récupère l'entrée et on la stocke dans un tableau.
    $sql3 = "SELECT Nom_de_l_equipe FROM equipe where Numero_de_l_equipe LIKE '3'";
    $rqt3 = $bdd->query($sql3);
  
    //Rangement dans un tableau associatif des données importées de la base de données.
    $rR3 = $rqt3->fetchall(PDO::FETCH_ASSOC);
  ?>
  <?php 
      foreach ($rR3 as $ligne3)
      {
  
      } 
  ?>
</center>
<center>
  <?php
    // On récupère l'entrée et on la stocke dans un tableau.
    $sql4 = "SELECT Nom_de_l_equipe FROM equipe where Numero_de_l_equipe LIKE '4'";
    $rqt4 = $bdd->query($sql4);
  
    //Rangement dans un tableau associatif des données importées de la base de données.
    $rR4 = $rqt4->fetchall(PDO::FETCH_ASSOC);
  ?>
  <?php 
    foreach ($rR4 as $ligne4)
    {
  
      print $ligne3["Nom_de_l_equipe"]." "." vs "." ".$ligne4["Nom_de_l_equipe"];
  
    } 
  ?>
  <center> <input type="text"  id="nbbut3"  name="nbbut3"  placeholder="Nombre de but" required/> <input type="text"  id="nbbut4"  name="nbbut4"  placeholder="Nombre de but" required/> </center><br />  

  <?php
    if(isset($ligne3["Nom_de_l_equipe"]) && isset($ligne4["Nom_de_l_equipe"]))
    {

      if(isset($_POST["nbbut3"]) && isset($_POST["nbbut4"]))
      {
    
        if($_POST["nbbut3"] > $_POST["nbbut4"])
        {

          echo "Le vainqueur du match est"." ".$ligne3["Nom_de_l_equipe"];

        }elseif($_POST["nbbut3"] < $_POST["nbbut4"])
        {

          echo "Le vainqueur du match est"." ".$ligne4["Nom_de_l_equipe"];

        }else
        {
          echo "Match nul"." "." entre ".$ligne3["Nom_de_l_equipe"]." "." et "." ".$ligne4["Nom_de_l_equipe"]." ".
          "les possibilitées pour les équipes , de se départageaient sont : la prologation, 
          le but en or ou les tir aux buts.";

        }

      }

    }   
  ?><br /><br /><br /><br />
  <center> <input type="submit" value="Entrer les scores !"></center><br /><br /><br /><br />
  <?php
    if(isset($_POST["nbbut1"]) && isset($_POST["nbbut2"]) 
      && isset($_POST["nbbut3"]) && isset($_POST["nbbut4"]))
      {
        echo " La grande final !"."<br /><br /><br />";
        if($_POST["nbbut1"] > $_POST["nbbut2"] && $_POST["nbbut3"] > $_POST["nbbut4"])
          {
            print $ligne1["Nom_de_l_equipe"]." "." vs "." ".$ligne3["Nom_de_l_equipe"];
          }elseif($_POST["nbbut1"] < $_POST["nbbut2"] && $_POST["nbbut3"] < $_POST["nbbut4"])
          {
            print $ligne2["Nom_de_l_equipe"]." "." vs "." ".$ligne4["Nom_de_l_equipe"];
          }elseif($_POST["nbbut1"] > $_POST["nbbut2"] && $_POST["nbbut3"] < $_POST["nbbut4"])
          {     
            print $ligne1["Nom_de_l_equipe"]." "." vs "." ".$ligne4["Nom_de_l_equipe"];
          }elseif($_POST["nbbut1"] < $_POST["nbbut2"] && $_POST["nbbut3"] > $_POST["nbbut4"])
          {
            print $ligne2["Nom_de_l_equipe"]." "." vs "." ".$ligne3["Nom_de_l_equipe"];
          }else{
            echo " La final n'est pas encore disponible veuillez terminer les matches éliminatoires s'il vous plaît ! ";
          }

          include('Tournoi2.php');
            if(isset($_POST["nbbut5"]) && isset($_POST["nbbut6"]))
            {
              if($_POST["nbbut5"] > $_POST["nbbut6"] && $_POST["nbbut1"] > $_POST["nbbut2"])
              {
                echo " Nous avons un vainqueur à votre tournois , l'équipe : "." ".$ligne1["Nom_de_l_equipe"];

              }elseif($_POST["nbbut5"] > $_POST["nbbut6"] && $_POST["nbbut1"] < $_POST["nbbut2"])
              {
                echo " Nous avons un vainqueur à votre tournois , l'équipe : "." ".$ligne2["Nom_de_l_equipe"];

              }elseif($_POST["nbbut5"] < $_POST["nbbut6"] && $_POST["nbbut3"] > $_POST["nbbut4"]){

                echo " Nous avons un vainqueur à votre tournois , l'équipe : "." ".$ligne3["Nom_de_l_equipe"];

              }elseif($_POST["nbbut5"] < $_POST["nbbut6"] && $_POST["nbbut3"] < $_POST["nbbut4"]){

                echo " Nous avons un vainqueur à votre tournois , l'équipe : "." ".$ligne4["Nom_de_l_equipe"];

              }else
              {
                echo " La final dois être complétée , 
                avec un score autre que celui d'un match null pour finir le tournois ! ";
              }
            }
      }      
  ?>


</form>
  </body>
  </html> 