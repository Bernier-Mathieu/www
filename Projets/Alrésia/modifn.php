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
    <?php    $db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');

$lien = $_GET['id'];
$sqlQuery = 'SELECT * FROM Notes WHERE id_notes = '.$lien.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>

    <p><?php 
    echo ' 
    <div id="container">
    <form method="post" action="modifnsql.php" enctype="multipart/form-data">
      <h1>Entrez les nouvelles informations<h1>
      <label><b>Titre</b></label>
      <input name="titre" value="'.$produit['titre'].'">
      <label><b>Notes</b></label>
      <input name="note" value="'.$produit['note'].'" style="width: 355px;"><br>
      <input type="hidden" name="id" value='.$lien.'>
     <input type="submit" id="submit" name="submit">
    </form>
    </div>'; ?></p>
<?php
}
?> </div>
  </body>
</html>