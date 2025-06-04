<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gadgets</title>
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
    <div class="col-12">
      <h4>Ceci sont les gadgets que Kanade a en sa possession (mais pas forcément équipés sur sa tenue) :</h4>
    </div>
  </div>
  <div class="row gy-4 py-4" id="acc">
    <div class="col-12 col-md-6">
      <img src="Images/eye.png" alt="Angel Eye">
    </div>
    <div class="col-12 col-md-6">
      <h1>Angel eye</h1>
      <p>
        Description : Cet œil possède une vision nocturne et infrarouge, il est de la même couleur que celui de Kanade donc jaune. Lorsque la vision nocturne ou infrarouge est utilisée, il brille en rouge. <br>
        Utilisation de la batterie : 1% par minute lorsque la vision nocturne ou infrarouge est utilisée.
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
