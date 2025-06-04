<?php
session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $id = $_SESSION['id'];
}
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
        <p id="texteacc">  Bienvenue chez GeekZone ! 
        
        Nous vous proposons plusieurs produits commercialisés dans nos 
        
        différentes boutiques situées dans la région Rhones-Alpes . 
        
        <br>
        </p> 
</div>
  </body>
</html>