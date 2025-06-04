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
    <?php include ('contenu/headeradmin.php'); ?>
      <!--Affichage de l'image -->
      <div>
      <img id="imgprin" src="images/geek.jpg" alt="">
      </div>
      <!-- création des produits et de leurs boutons-->
      <div id="texte"> Tout les clients  <br>
      <br><br>
      </div>
    <div id="">
<?php    
$db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$sqlQuery = 'SELECT * FROM User WHERE statut="client"';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>
    <p><?php echo '<div><p>'.$produit['Username'].'</p><button>modifier</button>
         <button>supprimer</button></div><br>'  ; ?></p>
<?php
}
?>
  </body>
</html>
        