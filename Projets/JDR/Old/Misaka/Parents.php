<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Parents</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/acc.css">
  <?php include ('Back/Head.php'); ?>
  <style>
    <?php include ('Back/MisaFont.php'); ?>
  </style>
</head>
<body>
<header>
  <?php include ('Back/MisaHeader.php'); ?>
  <?php include ('Back/audio.php'); ?>
</header>
<div class="container" id="acc">
  <h1 class="mt-4">Ces informations sont ce que sait Misaka donc pas forcément vraies !</h1>
  <div class="row py-4">
    <div class="col-md-6">
      <img src="Images/Kazuo.jpg" class="img-fluid" alt="Yrina Otonashi">
    </div>
    <div class="col-md-6">
      <h2>Kazuo Kawashima</h2>
      <ul>
        <li><strong>Origine :</strong> Japonais</li>
        <li><strong>Situation Actuelle :</strong> Vivant</li>
        <li><strong>Nom d'Alter :</strong> Poids zéro</li>
        <li><strong>Description :</strong>
          Kazuo possède l'Alter "Poids zéro", qui lui permet de manipuler la gravité de son propre corps. <br>
          Il peut rendre son corps presque insensible à la gravité, lui permettant de léviter et de se déplacer dans les airs avec agilité. <br>
          Kazuo peut également utiliser cette capacité pour sauter de grandes distances ou pour absorber les chocs lors de chutes.
        </li>
      </ul>
    </div>
  </div>
  <div class="row py-4">
    <div class="col-md-6">
      <img src="Images/Ayumi.jpg" class="img-fluid" alt="Seris Otonashi">
    </div>
    <div class="col-md-6">
      <h2>Ayumi Kawashima</h2>
      <ul>
        <li><strong>Origine :</strong> Japonaise</li>
        <li><strong>Situation Actuelle :</strong> Vivant</li>
        <li><strong>Nom d'Alter :</strong> Lien terrestre</li>
        <li><strong>Description :</strong>
        Ayumi possède l'Alter "Lien terrestre", qui lui permet de créer des liens gravitationnels avec les surfaces solides autour d'elle. <br>
        Elle peut utiliser ces liens pour marcher sur des surfaces verticales ou inverser sa propre gravité, lui permettant ainsi de marcher au plafond ou sur des murs. <br>
        Ayumi peut également ancrer des objets en manipulant leur gravité relative par rapport à elle.
        </li>
      </ul>
    </div>
  </div>
</div>
<?php include ('Back/MisaFooter.php'); ?>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
