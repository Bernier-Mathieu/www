<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>modification d'horaires</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <link rel="shortcut icon" href="images/favicon.ico" >
    <link rel="icon" type="image/gif" href="images/animated_favicon1.gif" >
  </head>
  <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header2.php'); ?>
    <!--Affichage de l'image -->
    <div id="img">
      <p> <img id="img" src="images/austin.png" alt=""></p>
    </div>
    <!-- Affichage du texte -->
    <div id="container">
    <form method="post" action="contenu/newh.php">
      <h1>Entrez les nouveaux horaires<h1>
      <label><b>Jours</b></label>
      <input name="newjour" value="ouvert du lundi au vendredi">
      <label><b>Matin</b></label>
      <input name="newmatin" value="de 8h30 à 12h">
      <label><b>Après-midi</b></label>
      <input name="newaprem" value="de 13h30 à 18h30">
     <input type="submit" id='submit' name='submit'>
    </form>
    </div>
  </body>
</html>