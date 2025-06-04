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
    <?php include ('contenu/headeradmin.php'); ?>
    <!--Affichage de l'image -->
    <div>
      <img id="imgprin" src="images/geek.jpg" alt="">
    </div> <!-- création du produits, ses différents photos et du bouton acheter-->
        <div>
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');

$lien = $_GET['id'];
$sqlQuery = 'SELECT Username , statut , ville  
FROM User 
INNER JOIN gérer ON User.id = gérer.id_adb
INNER JOIN boutique ON gérer.id_b = boutique.id
WHERE User.id = '.$lien.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();
foreach ($produit as $produit) {
?>
    <p><?php echo '
         <p>Nom : '.$produit['Username'].'</p><br>
         <p>statut : '.$produit['statut'].'</p><br>
         <p>boutique : '.$produit['ville'].'</p><br>
         
    </div>
    '  ; ?></p>
<?php
}
?>
    </div>
     
  </body>
</html>
