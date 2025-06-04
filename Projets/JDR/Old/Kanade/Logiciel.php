<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Sphere</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/acc.css">
  <?php include ('Back/Head.php'); ?>
  <style>
    <?php include ('Back/KanaFont.php'); ?>
  </style>
</head>
<body>
<header>
  <?php include ('Back/KanaHeader.php'); ?>
  <?php include ('Back/audio.php'); ?>
</header>
<div class="container">
  <div class="row gy-4 py-4" id="acc">
    <div class="col-md-8">
      <p>
        Avant de pouvoir mettre une capacité ou connaissance dans sa capsule, Kanade doit les faire passer par le logiciel "Sphere". Sphere est un logiciel que Kanade a dû intégrer dans la mémoire flash de son cerveau. Elle se branche sur un ordinateur pour l'utiliser, il peut lui permettre de convertir des choses existantes comme un dictionnaire en ligne, un tutoriel des bases de la guitare, etc., en connaissance à mettre dans sa capsule. Il permet aussi à Kanade de créer ses propres compétences. Elle s'en sert notamment pour faire les compétences de contrôle de ses différents gadgets ou pour booster temporairement ses parties mécaniques. Kanade ne pouvant posséder plus de trois connaissances ou compétences en même temps dans une capsule, elle garde donc les autres enregistrées sur le logiciel.
      </p>
    </div>
    <div class="col-md-4">
      <img src="Images/sphere.png" class="img-fluid" alt="Sphere">
    </div>
  </div>
</div>
<?php include ('Back/KanaFooter.php'); ?>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
