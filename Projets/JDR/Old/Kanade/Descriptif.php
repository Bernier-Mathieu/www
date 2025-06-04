<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Alter</title>
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
  <div class="row gy-4 py-4" Id = "acc">
    <div class="">
      <p>
       <span id="Alter"><b> L'alter en lui même </b></span> <br><br>
      Mekanicum est un alter particulier, le corps de l'utilisateur est à la fois organique et mécanique.<br>
      Cela va pour certains membres voir organes. De plus l'utilisateur a 2 "entrées" la première est une prise en haut de la nuque, <br>
      pour pouvoir recharger ses parties mécaniques. La deuxième est un port particulier dans le bras, <br>
      cachée par de la fausse peau, celui-ci permet à l'utilisateur de mettre de l'huile dans son système et de lire des "cartouches". <br>
      Kanade avais sa cartouche directement intégrer à la naissance .
      </p>
      <p>
       <span id="Alter"><b> Les Cartouches </b></span> <br><br>
       Les cartouches sont des petits objets ressemblant à des clé USB mais de forme cylindrique,
       d'un côté elles peuvent être branchées dans un port USB, de l'autre dans le port à cartouche de Kanade.
       Les cartouches ont comme les clé USB un espace de stockage définie à 3 "compétences",
       il suffit de les mettre dans la cartouche depuis un ordinateur, puis elle convertit ses données en signaux pouvant être lu par le corps de Kanade.
       Cela permet à Kanade d'apprendre une langue en quelque secondes, ou de booster ses parties mécaniques, 
       mais lorsque qu'une compétence est retirer de la cartouche Kanade ne peut plus les utiliser, 
       exemple : si elle met un dictionnaire espagnol dans la cartouche ,
       elle pourra lire et écrire espagnol mais au moment où celle-ci est retirée elle ne peut plus le faire à moins d'apprendre 
       l'espagnol naturellement avec de véritables cours. 

      </p>
      <p>
       <span id="Alter"><b> Le logiciel </b></span> <br><br>
       Kanade utilise un logiciel inclus dans la partie mécanique de son cerveau appelé "sphere" afin de coder des compétences pour sa capsule . Il sert pour les compétences permettant d'utiliser ses gadgets .  Elle doit se brancher à un ordinateur pour cela .
      </p>
      <p>
       <span id="Alter"><b> Les Parties mécaniques de kanade </b></span> <br><br>
       Mekanicum fait que Kanade est semi-mécaniques , les parties de son corps robotiques sont : 
      <ul>
     <li> - son œil droit</li>
      
     <li> - son bras droit (possédant le port à cartouche)</li>

     <li> - sa jambes gauche </li>

     <li> - l'un de ses poumons </li>

     <li> - et elle as une partie du cerveau aussi </li>
      </ul>
      Les parties externes et interne robotisé de Kanade sont là depuis sa naissance , elle grandissent avec elle . 
      Elles sont recouvertes d'une simili peau ultra réaliste rempli de capteur permettant de ressentir autant de chose que les parties normales de son corps .Toutes ses parties peuvent être réparer mais seul l'œil est amovible .
      </p>
      <p>
       <span id="Alter"><b> Les inconvénients </b></span> <br><br>
       Le gros inconvénients de l'alter de Kanade est que celui-ci consomme de l'énergie , Kanade a une batterie à côté du cœur depuis sa naissance , elle doit se recharger toutes les 24h au maximum si elle vit normalement , et penser à mettre de l'huile dans le système toute les semaines . Si elle se sert de gadgets comme ceux de sa tenue , cela consommera son énergie . Selon les gadgets utiliser et leurs temps d'utilisation son énergie baisse plus ou moins vite . On compte que si elle utilise trois gadgets en même temps pendant une heure , elle sera entièrement décharger . Si Kanade est décharger , elle ne meurt pas mais toutes les parties mécaniques de son corps lâche jusqu'à charge complète . Cela l'handicapant énormément vu qu'elle pert la moitié de sa mobilité , de son souffle et de sa vision , de plus elle ne peut plus utilisé ses gadgets . Seul la partie mécanique de son cerveau continue de fonctionner . De plus si elle oublie de mettre de l'huile entre les combats et toutes les semaines , son bras et sa jambes seront beaucoup moins efficace.

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
