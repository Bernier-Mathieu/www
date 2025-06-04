<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Album Photo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/acc.css">
  <?php include ('Back/Head.php'); ?>
  <style>
      .carousel-item {
      text-align: center;
      padding: 15px;
    }
    .carousel-caption {
      position: Relative;
      left: 0cm;
      bottom: 5cm;
      right: 0cm;
      color: black;
    }
    </style>
</head>
<body>
<style>
  <?php include ('Back/KanaFont.php'); ?>
</style>
<header>
  <?php include ('Back/KanaHeader.php'); ?>
  <?php include ('Back/audio.php'); ?>
</header>
<div class="container" id="acc">
    <div class="col-12 col-md-6 mx-auto"> <!-- Ajout de la classe mx-auto pour centrer -->
        <div id="monCarrousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/KanaS.png" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption">
                        <h5 >Kanade</h5>
                        <p >Kanade dans sa tenue habituelle.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/KanaK.png" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption">
                        <h5 >Kanade</h5>
                        <p >Kanade en Kimono.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/KanaD.png" class="d-block w-100" alt="Image 3">
                    <div class="carousel-caption">
                        <h5 >Kanade</h5>
                        <p >Kanade dans une tenue décontractée.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#monCarrousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="carousel-control-next" href="#monCarrousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
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
