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
    <?php include ('Back/KanaFont.php'); ?>
  </style>
</head>
<body>
<header>
  <?php include ('Back/KanaHeader.php'); ?>
  <?php include ('Back/audio.php'); ?>
</header>
<div class="container" id="acc">
  <h1 class="mt-4">Ces informations sont ce que sait Kanade donc pas forcément vraies !</h1>
  <div class="row py-4">
    <div class="col-md-6">
      <img src="Images/Yrina.png" class="img-fluid" alt="Yrina Otonashi">
    </div>
    <div class="col-md-6">
      <h2>Yrina Otonashi</h2>
      <ul>
        <li><strong>Origine :</strong> Française</li>
        <li><strong>Situation Actuelle :</strong> Mort</li>
        <li><strong>Nom d'Alter :</strong> Angelic eyes</li>
        <li><strong>Description :</strong>
          Les porteurs de l'Alter "Angelic Eyes" possèdent des pupilles qui effectuent de légers micro-mouvements lorsqu'ils regardent quelqu'un dans les yeux. Ces mouvements subtils ont un effet hypnotique sur ceux qui les regardent, les influençant à avoir davantage confiance en l'utilisateur et à être plus enclins à suivre ses suggestions ou ses directions.

          Cependant, conscients du pouvoir potentiellement manipulateur de leur Alter, les utilisateurs d'Angelic Eyes ont pris des mesures pour limiter son utilisation. Ils portent généralement des lunettes de soleil pour couvrir leurs yeux et réduire ainsi l'effet de leur Alter sur les autres. Cette précaution montre une volonté de contrôler leur pouvoir et de ne pas abuser de leur capacité à influencer les autres.

          L'usage responsable de cet Alter est crucial pour éviter toute manipulation indue ou exploitation de la confiance des autres. Les utilisateurs d'Angelic Eyes doivent être conscients de l'impact de leur pouvoir sur autrui et l'utiliser avec discernement, en veillant à ne pas compromettre l'autonomie ou la volonté des personnes autour d'eux.
        </li>
      </ul>
    </div>
  </div>
  <div class="row py-4">
    <div class="col-md-6">
      <img src="Images/Seris.png" class="img-fluid" alt="Seris Otonashi">
    </div>
    <div class="col-md-6">
      <h2>Seris Otonashi</h2>
      <ul>
        <li><strong>Origine :</strong> Japonais</li>
        <li><strong>Situation Actuelle :</strong> Mort</li>
        <li><strong>Nom d'Alter :</strong> Braided skin</li>
        <li><strong>Description :</strong>
          Les individus possédant l'Alter braided skin ont une peau unique qui semble être tressée comme une corde, offrant une protection remarquable contre les balles et les projectiles d'armes à feu. La texture tressée de leur peau agit comme une armure naturelle, déviant les balles et réduisant leur impact. Cependant, bien que cette caractéristique confère une résistance impressionnante contre les attaques balistiques, elle ne diminue pas le choc causé par les coups directs ou les attaques physiques.

          Contrainte : Malgré la résistance accrue aux balles et aux projectiles, braided skin ne confère aucune protection supplémentaire contre les attaques de type énergétique ou les effets secondaires des attaques, comme les explosions qui peuvent causer des dégâts indirects. De plus, bien que la peau tressée soit résistante, elle n'offre pas une immunité totale aux blessures. Les coups violents peuvent toujours causer des dommages, bien que moins graves que sur une peau normale.

          Les utilisateurs de braided skin doivent donc faire preuve de prudence et de stratégie dans leur utilisation de cet Alter, en évitant de compter uniquement sur leur résistance aux balles et en prenant en considération les autres types de dangers auxquels ils pourraient être confrontés. En outre, la peau tressée peut être plus difficile à cacher, ce qui peut poser des défis supplémentaires dans certaines situations sociales ou d'espionnage.
        </li>
      </ul>
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
