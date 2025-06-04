<?php
session_start();  // démarrage d'une session
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Accueil</title>
    <meta meta="" name="viewport">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="shortcut icon" href="images/logo.png" >
    </head>
    <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header.php'); ?>
      <!--Affichage de l'image -->
      <div>
      <img id="imgprin" src="images/geek.jpg" alt="">
      </div>
    <!-- Affichage du texte -->
      <div>
    <?php include ('contenu/formb.php'); ?>
</div>
  </body>
</html>