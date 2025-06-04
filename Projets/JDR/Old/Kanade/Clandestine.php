<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Héroïne clandestine</title>
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
    <div class="col-12">
      <p>
      Kanade, maintenant loin du laboratoire, se posa un peu sous ce pont.
      Elle remarqua que tous ses gadgets avaient été cassés pendant la fuite, sauf son œil amélioré. 
      Elle les détruisit donc, et se promena en ville. Elle trouva sur un trottoir un petit sac à dos rose, légèrement abîmé mais rien de grave, 
      elle le ramassa pour y stocker ses affaires (son œil normal, sa tenue). Elle évita les endroits avec du monde, 
      sachant que le chien et elle attiraient l'attention. Elle se méfia aussi de tous les agents de l'État, 
      pour elle un tel laboratoire ne pouvait être que gouvernemental. Elle commença alors à se balader, passant de ville en ville, 
      dormant là où elle le pouvait, du haut de ses 14 ans. Elle se mit aussi à voler, 
      pas beaucoup juste de quoi se nourrir elle et son chien et de quoi survivre. 
      Elle se faisait parfois attraper et sermonner mais jamais plus, 
      ses méfaits étaient trop légers pour que les gens lui en veuillent longtemps surtout vu son âge. 
      On lui proposa plusieurs fois de venir vivre chez des gens mais elle refusa toujours, préférant ne mettre personne en danger, 
      persuadée que les médecins la cherchaient. Vers ses 15 ans, elle commença à aider les gens, 
      c'était comme elle pouvait, que ce soit aider des personnes âgées par moments, ou des commerçants, pour se faire un peu d'argent. 
      Elle économisa jusqu'à ce qu'elle puisse acheter un petit ordinateur, elle y utilisa Sphere et commença à réparer sa tenue. 
      Elle dépensait son argent en nourriture et bonbons. Elle codait rapidement Overdrive, elle avait toujours dans sa capsule Overdrive et Eye sensors.
      Pour éviter les problèmes de batterie, Kanade se branchait discrètement dans les lieux publics possédant des prises en journée, 
      mais cela faisait qu'elle n'était jamais chargée au maximum n'ayant pas le temps. Un jour, alors qu'elle se promenait, 
      elle a vu une jeune lycéenne agressée par trois lycéens dans une ruelle, elle s'interposa avec son chien, 
      elle utilisa Overdrive pour faire fuir les jeunes mais la lycéenne prit peur et fuit. Kanade dut se recharger pendant un temps après cela.
      Kanade décide alors de protéger les gens, en journée, avec son ordinateur elle traquait les crimes légers sur internet, 
      utilisant sa capsule avec les connaissances en informatique. Toutes les informations qu'elle récupérait qui permettaient d'identifier un criminel,
      elle en faisait don anonymement à la police. La nuit elle utilisait Eye sensors et en cas de gros problème Overdrive, 
      afin d'empêcher des crimes mineurs (agression, vol à la tire et autre). 
      Elle se fit connaître sous le nom de Red Angel à cause de la couleur de son œil mécanique en utilisant Eye sensors, 
      et de sa chevelure blanche immaculée. Cela dura deux ans, jusqu'à ce qu'elle tombe sur un ennemi plus fort, "la suite inrp".
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
