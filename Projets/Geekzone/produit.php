<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Produit</title>
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
    </div> <!-- création du produits, ses différents photos et du bouton acheter-->
        <div>
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');

$lien = $_GET['id'];
$sqlQuery = 'SELECT * FROM produit WHERE nom = "'.$lien.'"';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>
    <p><?php echo ' <div id="texte"><p>'.$produit['nom'].'</p><br></div>
    <div id="centre"><p><img src="images/'.$produit['image'].'" style="float:left" height="300" width="300"></p>
         <p>Description : '.$produit['description'].'</p><br>
         <button>'.$produit['prix'].'€<br> Acheter</button>
    </div>
    <div style="margin-top:8cm">
        <p>détails : <br> '.$produit['detail'].' </p>
        
    </div>'  ; ?></p>
<?php
}
?>
    </div>
     
  </body>
</html>
