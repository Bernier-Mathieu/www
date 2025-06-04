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
  <?php include ('Back/KanaFont.php'); ?>
</style>
<header>
  <?php include ('Back/KanaHeader.php'); ?>
  <?php include ('Back/audio.php'); ?>
</header>
<div class="container">
  <div class="row gy-4 py-4" id="acc">
    <div class="col-12 col-md-6">
      <img src="Images/Kana_Phy.png" class="img-fluid" alt="Apparence de Kanade">
    </div>
    <div class="col-12 col-md-6">
      <p>
      Kanade est une fille d'apparence assez jeune, une personne ne connaissant pas son âge pourrait croire qu'elle a deux ans de moins. <br>
      Kanade n'est pas très grande du haut de son mètre soixante-six, elle a une taille très fine. <br>
      Kanade possède une longue chevelure blanche immaculée, qui lui arrive jusqu'aux fesses si elle les laisse détachées. <br>
      Elle a aussi de grands yeux jaunes qui sont toujours aux aguets. Kanade n'a presque pas de poitrine, <br>
      c'est comme si son corps avait du mal à grandir depuis ses 15 ans, expliquant son aspect assez jeune. <br>
      Kanade porte tout ce qui lui passe sous la main mais qu'elle trouve sympa, <br>
      mais elle a une préférence pour l'uniforme scolaire qu'elle porte très souvent. <br>
      Kanade possède derrière la tête, en haut de la nuque une petite prise cachée par ses cheveux. 
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
