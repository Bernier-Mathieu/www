<!DOCTYPE html>
   <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>Mode</title>
      <meta meta="" name="viewport">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="shortcut icon" href="images/logo.png" >
    </head>
    <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header.php'); ?>
      <!--Affichage de l'image -->
      <div>
      <img id="imgprin" src="images/geek.jpg" alt="">
      </div>
      <!-- création des boutiques et de leurs boutons-->
      <div id="texte"> Toutes nos boutiques <br>
      <br>
      Des Boutiques dans toutes la région Rhones-Alpes pour votre plus grand plaisir !!
      <br><br>
      </div>
    <div id="">
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');

$sqlQuery = 'SELECT * FROM boutique';
$boutiqueStatement = $db->prepare($sqlQuery);
$boutiqueStatement->execute();
$boutique = $boutiqueStatement->fetchAll();

foreach ($boutique as $boutique) {
?>
    <p><?php echo '<div><p><img src="images/'.$boutique['image'].'" style="float:left" height="150" width="150"></p><p><a href="boutique.php?id='.$boutique['id'].'">'.$boutique['ville'].'</p></img></a></div><br><br><br><br><br><br><br><br>'  ; ?></p>
<?php
}
?>>
  </body>
</html>
        