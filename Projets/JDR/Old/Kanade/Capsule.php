<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Capsule</title>
  <meta meta="" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/acc.css">
  <?php include ('Back/Head.php'); ?>
</head>
<body>
<style>
  <?php include ('Back/KanaFont.php'); ?>
</style>
  <header>
    <?php include ('Back/KanaHeader.php'); ?>
    <?php include ('Back/audio.php'); ?>
  </header>
  <div class="container">
    <div class="row gy-4 py-4" id="acc">
      <div class="col-12 col-md-6">
        <img src="Images/Capsule.png" class="img-fluid" alt="Capsule">
      </div>
      <div class="col-12 col-md-6">
        <h1>Les Capsules</h1>
        <p>
          Les capsules qu'utilise Kanade ressemblent à cela, avec un port USB mâle rétractable d'un côté. L'autre côté vient se brancher dans le port de Kanade.
          Lorsque Kanade met une capsule, celle-ci prend 5 minutes avant d'être active. La capsule n'est pas visible lorsque le port est fermé, évitant de l'abîmer ou de montrer la véritable nature de Kanade.
          La capsule convertit les données qui sont à l'intérieur en données utilisables par le corps de Kanade. Kanade en possède une seule, la façon de les fabriquer lui est inconnue et elle ne peut en utiliser qu'une seule à la fois.
        </p>
      </div>
    </div>
  </div>
  <?php include ('Back/KanaFooter.php'); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
