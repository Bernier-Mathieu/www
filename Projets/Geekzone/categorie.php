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
      <!-- création des produits et de leurs boutons-->
      <div id="texte"> Produits Mode <br>
      <br>
      Plusieurs vêtements assortis pour rester branché !
      <br><br>
      </div>
    <div id="">
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$lien = $_GET['id'];
$sqlQuery = 'SELECT * FROM produit WHERE categorie = '.$lien.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>
    <p><?php echo '<div><p><img src="images/'.$produit['image'].'" style="float:left" height="150" width="150"></p><p><a href="produit.php?id='.$produit['nom'].'">'.$produit['nom'].'</p></img></a></div><br><br><br><br><br><br><br><br>'  ; ?></p>
<?php
}
?>>
  </body>
</html>
        