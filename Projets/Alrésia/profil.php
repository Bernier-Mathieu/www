<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>modif profil</title>
    <meta meta="" name="viewport">
      <link rel="shortcut icon" href="/images/icon.ico"/>
      <link rel="apple-touch-icon" href="/images/icon.ico"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/texte.css">
      <link rel="stylesheet" type="text/css" href="css/form.css">
      <link rel="stylesheet" type="text/css" href="css/images.css">
    </head>
    <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header.php'); ?>
      <!--Affichage de l'image -->
<p>
    <div id="container1">
     <form method="post" action="profiladd.php" enctype="multipart/form-data">
      <h1 id="blanc">Entrez les informations<h1>
      <textarea name="des" value="" placeholder="Entrez votre description"  rows="7" cols="20" required></textarea>
      <input type="hidden" name="MAX_FILE_SIZE" value="100000000"><br>
     <p id="blanc">Image : </p> <input type="file" name="ava" id="blanc">
     <input type="submit" id="submit" name="submit">
    </form>
    </div></p>

  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
