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
  <h2> Crée votre tournoi </h2> 
  <form action="creationsuite.php" method="post">
    <table>
        <tr><td> <label for="nomtournoi">Nom du tournoi :</label>
        <input type="text"  id="nomtournoi" name="nomtournois" placeholder="TOURNAMENT" required /> </td> </tr>

        <tr><td> <label for="ville">Ville :</label>
        <input type="text" id="ville"  name="ville" placeholder="City" required/></td> </tr>
      
        <tr><td align="center" colspan="2"><br><input type="submit"
        value="Création de tournoi !"></td></tr>
		</table>
  </form>
	    <br />
		  <center> <a href="accueil.php">Retour à l'accueil</a> </center>
  </form>
  </body>
  </html>
  