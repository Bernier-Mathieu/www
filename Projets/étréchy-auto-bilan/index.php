<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Accueil</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
    <!-- Affichage du texte -->
      <div id="annonce" >
        <?php include ('contenu/annonce.php'); ?>
      </div>
      <div>
        <p id="intro">Étréchy Auto Bilan est un centre de contrôle technique près <br>
           de la RN 20 à Étréchy . Ce centre possède l'agrément afin de faire <br>
           passer les véhicules GPL et le centre est équipé pour tous types de  4x4 . </p> 
        <br>
        <p id="lien">Ce centre est indépendant et rattaché à la coopérative AutoSecuritas :
          <a href="https://autosecuritas.fr/public/"> https://autosecuritas.fr/public/ </a>
        </p>
</div>
  </body>
</html>