<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Connexion</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <link rel="shortcut icon" href="images/favicon.ico" >
    <link rel="icon" type="image/gif" href="images/animated_favicon1.gif" >
  </head>
  <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header.php'); ?>
    <!--Affichage de l'image -->
    <div id="img">
      <p> <img id="img" src="images/austin.png" alt=""></p>
    </div>
    <?php include ('contenu/form.php'); ?>
    <!-- Affichage du texte -->
  </body>
</html>