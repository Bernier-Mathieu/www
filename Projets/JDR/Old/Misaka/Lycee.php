<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La vie en laboratoire</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/acc.css">
  <?php include ('Back/Head.php'); ?>
</head>
<body>
<style>
  <?php include ('Back/MisaFont.php'); ?>
</style>
<header>
  <?php include ('Back/MisaHeader.php'); ?>
  <?php include ('Back/audio.php'); ?>
</header>
<div class="container">
  <div class="row gy-4 py-4" id="acc">
    <div class="col-12">
      <p>
      Arrivée à YUEI, Misaka essaya de reprendre de bonne habitude mais son côté provocateur resta en elle. <br>
      Elle ne s'occupaient des autres élèves que lors des cours en groupe , sinon elle s'entrainait seule préfèrent cela. <br>
      Elle se fit souvent remarquer pour son comportement assez limite dans tout les sens du terme par les professeurs, <br>
      et ses notes osciller souvent entre bonnes et limite. Elle faisait le strict minimum pour rester dans le lycée sans jamais se surmener. <br>
      Elle passa donc ses trois années tranquillement, donnat un coup de fouet quand ses notes baisser mais sans jamais modifier son comportement.
    </div>
    </div>
  </div>
  <?php include ('Back/MisaFooter.php'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
