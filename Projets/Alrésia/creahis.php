<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>ajout notes</title>
    <meta meta="" name="viewport">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="shortcut icon" href="/images/icon.ico"/>
      <link rel="apple-touch-icon" href="/images/icon.ico"/>
      <link rel="stylesheet" type="text/css" href="css/texte.css">
      <link rel="stylesheet" type="text/css" href="css/images.css">
    </head>
    <body>
        <?php include ('contenu/header.php'); ?>
           <p>
   <p id="left">
    <div id="container1">
     <form method="post" action="addstories.php" id="center">
      <label id=""><b>Titre</b></label><br>
      <input type="text" placeholder="Entrer le titre" name="titre" required><br>
      <label id=""><b>texte</b></label><br>
      <textarea name="txt" value="" placeholder="Entrez votre texte" rows="150" cols="150" required></textarea><br>
      <input type="radio" name="statut" value="oui" checked>
      <label for="post">Poster</label>
      <input type="radio" name="statut" value="non">
      <label for="save">Sauvegarder</label>
     <input type="submit" id="submit" name="submit">
    </form>
    </div></p>
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