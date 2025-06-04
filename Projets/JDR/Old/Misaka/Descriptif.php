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
  <?php include ('Back/MisaFont.php'); ?>
</style>
  <header>
    <?php include ('Back/MisaHeader.php'); ?>
    <?php include ('Back/audio.php'); ?>
  </header>
  <div class="container">
  <div class="row gy-4 py-4" Id = "acc">
    <div class="">
      <p>
       <span id="Alter"><b> Description générale de l'Alter "Nekotengen" : </b></span> <br><br>
       L'Alter "Nekotengen" confère à son utilisateur la capacité unique de manipuler la gravité, <br>
       offrant un ensemble de compétences polyvalent et dynamique. En utilisant cette capacité, l'utilisateur peut créer des champs gravitationnels, <br>
       léviter dans les airs, inverser la gravité autour d'eux, et même glisser sur des surfaces planes. Chaque capacité offre des avantages distincts, <br>
       permettant à l'utilisateur de s'adapter rapidement à différentes situations.<br>
      </p>
      <p>
       <span id="Alter"><b> Capacités de l'Alter "Nekotengen" :</b></span> <br><br>
       <ul>
        <li><span id="Alter"><b> Manipulation gravitationnelle :</b></span> <br>
        L'utilisateur peut créer des champs gravitationnels dans un rayon de 10 mètres, influençant les objets d'une masse maximale de 100 kilogrammes. <br>
        La durée d'action de cette capacité est limitée à 5 minutes, après quoi l'Alter nécessite une période de refroidissement de 15 minutes pour éviter une surcharge énergétique.<br>
        L'utilisateur peut précisément ajuster la force du champ, permettant un contrôle fin des mouvements des objets dans leur environnement immédiat.
        </li>
        <li><span id="Alter"><b> Lévitation maîtrisée : </b></span> <br>
        La lévitation peut être activée pendant une durée maximale de 20 minutes en continu. Cependant, au-delà de cette limite,<br>
        l'utilisateur commence à ressentir une fatigue accrue. Après la période d'activité, <br>
        un repos de 10 minutes est nécessaire pour éviter une fatigue excessive. Cette capacité offre une grande maniabilité dans les airs, <br>
        permettant à l'utilisateur de s'adapter rapidement aux changements de gravité.
        </li>
        <li><span id="Alter"><b> Inversion de gravité prolongée : </b></span> <br>
        L'inversion de gravité peut être activée dans un rayon de 5 mètres autour de l'utilisateur. <br>
        La durée maximale a été étendue à 5 minutes, permettant des périodes prolongées d'exploration ou d'utilisation tactique. <br>
        Cependant, après cette période, une période de récupération de 30 minutes est nécessaire pour éviter des effets indésirables tels que des vertiges et des nausées. <br>
        Cette capacité offre des possibilités tactiques uniques pour les déplacements et les échappatoires.
        </li>
        <li><span id="Alter"><b> Glissade gravitationnelle : </b></span> <br>
        L'utilisateur peut créer une pente gravitationnelle légère sur des surfaces planes, facilitant une glissade rapide sur le sol. <br>
        Cette capacité est idéale pour des déplacements rapides sur de courtes distances et peut être maintenue pendant 10 minutes avant de nécessiter <br>
        une pause de 5 minutes pour éviter une fatigue excessive.
        </li>
       </ul>
      </p>
      <p>
       <span id="Alter"><b> Effets physiques pendant l'utilisation :  </b></span> <br><br>
       Les yeux de l'utilisateur brillent d'une lueur gravitationnelle distinctive pendant l'utilisation intense de l'Alter,<br>
       reflétant l'activation puissante de ses capacités. Cette lueur peut varier en intensité en fonction de l'ampleur de la manipulation gravitationnelle en cours, <br>
       ajoutant une dimension visuelle captivante à l'utilisation de l'Alter. <br>
       Les yeux lumineux témoignent de la connexion profonde entre l'utilisateur et le pouvoir gravitonique, <br>
       mais aussi des efforts physiques et mentaux nécessaires pour maîtriser ces capacités exceptionnelles.
      </p>
      <p>
       <span id="Alter"><b> Contre-coups évolutifs de l'utilisation excessive :</b></span> <br><br>
       <ul>
       <li><span id="Alter"><b> Fatigue initiale : </b></span> <br>
       Après 20 minutes d'utilisation intensive, l'utilisateur commence à ressentir une fatigue notable. Pendant cette période, <br>
       la manipulation gravitationnelle devient moins précise, mais l'utilisateur peut encore maintenir un contrôle de base.
        </li>
        <li><span id="Alter"><b> Maux de tête sévères ajoutés :  </b></span> <br>
        Au bout de 30 minutes d'utilisation, les maux de tête sévères se manifestent, <br>
        compromettant davantage la concentration et la clarté mentale de l'utilisateur. <br>
        La précision dans l'exécution des capacités gravitationnelles diminue sensiblement.
        </li>
        <li><span id="Alter"><b> Désorientation temporaire accrue :  </b></span> <br>
        Après 40 minutes d'utilisation continue, les périodes de désorientation deviennent plus fréquentes et plus prononcées. <br>
        L'utilisateur peut avoir du mal à maintenir une trajectoire précise et à évaluer correctement son environnement.
        </li>
       </ul>
      </p>
      <p>
       <span id="Alter"><b> Complication à long terme (après 1 heure d'utilisation excessive) : </b></span> <br><br>
       Une exposition prolongée aux contre-coups peut entraîner des perturbations persistantes du système nerveux, <br>
       provoquant des troubles de l'équilibre et une coordination altérée, même en dehors de l'utilisation de l'Alter. <br>
       Un repos étendu de plusieurs heures voire jours peut être nécessaire pour rétablir complètement les fonctions neurologiques normales.
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
