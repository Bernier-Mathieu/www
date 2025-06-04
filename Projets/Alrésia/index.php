<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Accueil</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="shortcut icon" href="/images/icon.ico"/>
      <link rel="apple-touch-icon" href="/images/icon.ico"/>
      <link rel="stylesheet" type="text/css" href="css/texte.css">
      <link rel="stylesheet" type="text/css" href="css/images.css">
    </head>
    <body>
        <?php include ('contenu/header.php'); ?>
        <div id="accueil">
            <?php
            if (isset($_SESSION['login'])) {
                echo '<p id="txtaccueil">Bonjour '.$_SESSION['login'].' et bienvenue sur Alrésia !</p><br>
                <p id="txtaccueilexpli">Qu’est-ce que le rp ? Le rp, ou roleplay, est le fait de créer et de jouer 
                un personnage afin de créer une histoire avec d’autre roleplayeurs. Cela touche à tout les univers : 
                médiéval, médiéval fantastique, les mangas (My Hero Academia, HunterXHunter…), les romans (Harry Potter, 
                le Seigneur des Anneaux…), ou même des univers comme Star Wars ou les DC comics. Les façons et les univers 
                de rp sont très variable car tout se fait via l’imagination. Chacun est libre de créer son univers (ou d’en 
                choisir un qui lui plait) et d’écrire sa propre histoire. C’est cela la magie du rp !</p><br>
                <img id="imgacc" src="images/accueil.png">';
            }else {
                echo '<p id="txtaccueil">Bonjour et bienvenue sur Alrésia !</p><br>
                <p id="txtaccueilexpli">Qu’est-ce que le rp ? Le rp, ou roleplay, est le fait de créer et de jouer 
                un personnage afin de créer une histoire avec d’autre roleplayeurs. Cela touche à tout les univers : 
                médiéval, médiéval fantastique, les mangas (My Hero Academia, HunterXHunter…), les romans (Harry Potter, 
                le Seigneur des Anneaux…), ou même des univers comme Star Wars ou les DC comics. Les façons et les univers 
                de rp sont très variable car tout se fait via l’imagination. Chacun est libre de créer son univers (ou d’en 
                choisir un qui lui plait) et d’écrire sa propre histoire. C’est cela la magie du rp !</p><br>
                <img id="imgacc" src="images/accueil.png">';
            }
                ?>
                <script src='https://cdn.jsdelivr.net/npm/@widgetbot/crate@3' async defer>
    new Crate({
        server: '876863306504228904', // Alrésia
        channel: '877289520394039367' // #commande-administration
    })
</script>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>