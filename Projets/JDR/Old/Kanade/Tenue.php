<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Tenue</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/acc.css">
  <link rel="shortcut icon" href="/Images/icon.ico"/>
  <link rel="apple-touch-icon" href="/Images/icon.ico"/>
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
    <div class="col-md-4">
      <img src="Images/Tenue.png" class="img-fluid" alt="La tenue V1">
      <h1>La tenue V1</h1>
      <p>
        La tenue de Kanade a été conçue en laboratoire, elle ne possède aucune véritable capacité à part qu'elle protège légèrement l'utilisateur. 
        Elle est en fibre de carbone et en aluminium, remplie de petites électrodes ce qui permet de fixer les gadgets et de les relier à Kanade.
        Dans la manche droite se trouve un petit câble pour brancher la tenue dans le port de Kanade.
      </p>
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <img src="Images/Casque.png" class="img-fluid" alt="Le casque V1">
      <h1>Le casque V1</h1>
      <p>
        Le casque de Kanade a lui aussi été conçu en laboratoire, il ne fait que protéger ses yeux de petits éclats ou autre.
        Il s'accroche au reste de la tenue au niveau des oreilles.
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
