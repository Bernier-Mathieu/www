<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Caractère</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <div class="col-12 col-md-6">
      <img src="Images/Misaka_Acc.png" class="img-fluid" alt="Kanade">
    </div>
    <div class="col-12 col-md-6">
      <p>
      Misaka a toujours eu du mal à s'intégrer à la population, le fait qu'elle soit franche et limite sur certaines choses ne l'aide pas. <br>
      Effectivement, Misaka ne cache pas ce qu'elle pense ou ressent, elle se fiche de ce que les autres pensent d'elle. <br>
      De plus, Misaka a toujours eu un côté joueur qui fait qu'elle prend un malin plaisir à mettre les autres mal à l'aise avec certains de ses commentaires, <br>
      mais cela l'as toujours désavantager en amour vu qu'elle à tendance à faire du rentre-dedans ou embêter les gens qu'elle aime. <br>
      Misaka à aussi tendance à braver l'autorité et à provoquer toute personne la cherchant un peu trop, mais elle en arrive rarement au mains.

      </p>
    </div>
  </div>
</div>
<?php include ('Back/MisaFooter.php'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
