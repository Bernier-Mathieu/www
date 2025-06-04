<!DOCTYPE html>
   <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>modifications des boutiques</title>
      <meta meta="" name="viewport">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="shortcut icon" href="images/logo.png" >
    </head>
    <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/headeradmin.php'); ?>
      <!--Affichage de l'image -->
      <div>
      <img id="imgprin" src="images/geek.jpg" alt="">
      </div>
    <!-- Affichage du texte -->
    <?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');

$lien = $_GET['id'];
$sqlQuery = 'SELECT * FROM boutique WHERE id = '.$lien.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>

    <p><?php 
    $horaires = $produit['horaires'];
    echo ' 
    <div id="container">
    <form method="post" action="contenu/modifb.php" enctype="multipart/form-data">
      <h1>Entrez les nouvelles informations<h1>
      <label><b>Ville</b></label>
      <input name="ville" value="'.$produit['ville'].'">
      <label><b>Horaires</b></label>
      <input name="horaires" value="'.$produit['horaires'].'" style="width: 355px;"><br>
      <label><b>Numéro et nom de la rue</b></label>
      <input name="rue" value="'.$produit['rue'].'">
      <label><b>code postal</b></label>
      <input name="cp" value="'.$produit['cp'].'">
      <label><b>téléphone</b></label>
      <input name="telephone" value="'.$produit['telephone'].'">
      <input type="hidden" name="photo" value='.$produit['image'].'>
      <input type="hidden" name="id1" value='.$produit['id'].'>
      <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
     Image : <input type="file" name="bou">
     <input type="submit" id="submit" name="submit">
    </form>
    </div>'; ?></p>
<?php
}
?>
  </body>
</html>