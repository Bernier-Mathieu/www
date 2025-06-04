<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Enfance</title>
  <meta meta="" name="viewport">
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
  <div class="row">
    <div class="col-12">
      <div class="row gy-4 py-4" id="acc">
        <div class="col-12">
          <p>
            Kanade, née le premier Janvier d'il y a 17 ans, à sa naissance les médecins pensaient que la petite avait un problème vu que celle-ci avait du mal à respirer. Ils la retirèrent donc à ses parents le temps d'examens, mais ils remarquèrent tout de suite que quelque chose n'allait pas.<br>
            La petite avait une petite prise derrière la tête, ils poussèrent donc les examens et virent alors que l'un des bras et l'une des jambes de la petite était mécanique, elle passa donc un IRM et l'ont vu que l'un de ses poumons était aussi robotisé ainsi qu'une partie de son cerveau.<br>
            Les parents furent immédiatement mis au courant, Ils paniquèrent mais réfléchirent et décidèrent de garder la petite et de cacher sa nature particulière.<br>
            Les parents faisaient des visites de contrôle régulier à l'hôpital avec la petite, tous furent surpris de voir les parties mécaniques grandirent avec l'enfant comme si tout était normal.<br>
            Lorsque la petite entra à l'école, elle savait qu'elle était différente, elle cacha donc sa prise avec ses cheveux et ne mettait jamais d'huile en publique pour éviter d'ouvrir son cache devant les autres.<br>
            Alors qu'elle avait 5 ans, un petit accident vint tout bouleverser, alors que Kanade jouait avec ses amis, elle tomba et ses cheveux s'écartèrent laissant voir sa prise.<br>
            Ses amis furent d'abord curieux, elle décida donc de leur parler de sa nature et leur montra son cache. Certains furent un peu effrayés et la nouvelle se répandit rapidement entre les élèves et les professeurs.<br>
            Kanade commença à être harcelée par les autres, et alors que tout allait mal, des gens, apparemment des scientifiques proposèrent aux parents de Kanade de la racheter afin de l'étudier.<br>
            Les parents furent outrés et déménagèrent, Kanade se retrouva dans une nouvelle école. Après quelque mois, Kanade commença à remarquer que des gens la suivaient lorsqu'elle rentrait chez elle.<br>
            Et, un jour, en pleine nuit, la porte de sa maison fut fracturée et un groupe de trois personnes entrèrent chez elle.<br>
            Les personnes, cagoulées, essayèrent d'enlever Kanade, ses parents arrivèrent en entendant le bruit mais l'un des hommes sortit une arme à feu et les abattit de sang froid.<br>
            Kanade dans la peur, la tristesse et l'effroi arrêta de lutter, elle se retrouva attachée dans une voiture et emmenée loin de chez elle.<br>
            Elle perdit rapidement connaissance en pleurant.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include ('Back/KanaFooter.php'); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
