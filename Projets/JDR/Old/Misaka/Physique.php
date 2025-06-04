<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Apparence</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <img src="Images/Misa_Phy.png" class="img-fluid" alt="Apparence de Kanade">
    </div>
    <div class="col-12 col-md-6">
      <p>
      Misaka est une fille assez particulière, elle a de longs cheveux blanc-gris qui cascade jusqu'à son bassin. <br>
      Ses yeux brillent légèrement d'un bleu électrique selon sa charge et ses émotions ce qui lui donne un regard assez mystérieux. <br>
      Elle paraît très jeune, au alentour de 18-19 ans alors qu'elle en a 23. <br>
      Elle s'habille beaucoup de manière désinvolte comme pour provoquer l'autorité ou les autres. <br>
      Misaka à des formes assez légères qui ne le gène pas en combat ou pour se déplacer. 
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
