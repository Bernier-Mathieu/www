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
  <?php include ('Back/MisaFont.php'); ?>
</style>
  <header>
    <?php include ('Back/MisaHeader.php'); ?>
    <?php include ('Back/audio.php'); ?>
  </header>
  <div class="container">
  <div class="row">
    <div class="col-12">
      <div class="row gy-4 py-4" id="acc">
        <div class="col-12">
          <p>
          Misaka à eu une enfance plutôt simple mais rempli de choses qui l'ont transformée, <br>
          ses parents ont toujours était très gentils avec elle mais ils étaient plutôt pauvre vivant du peu qu'ils gagnaient. <br>
          Mais ils faisaient tout pour gâter leur petite fille à laquelle ils tenaient beaucoup. <br>
          Mais cela quelque problème à l'école à Misaka qui fut souvent moquée par ses camarades de classe du fait qu'elle ne posséder jamais les derniers objets à la mode, <br>
          avait du matériel un peu plus abîmer. Misaka se renferma donc rapidement sur elle même s'isolant des autres. <br>
          Cela durera jusqu'à l'entrée au collège ou elle décide de changer, elle commence à braver l'autorité de ses professeurs pour se donner un air cool et méchant,<br>
           elle commence à provoquer ses harceleurs et tout ceux qui l'embête quitte à en venir au mains. Mais Misaka rêver de devenir une héroïne, <br>
           elle se donner donc les moyens scolairement pour intégrer YUEI. Elle termine le collège avec d'excellente note et intègre YUEI.

          </p>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include ('Back/MisaFooter.php'); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
