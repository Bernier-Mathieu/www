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
      <div id="texte"> Tout les produits  <br>
      <br><br>
      </div>
    <div id="">
        <p  id="centre">
              <a href="ajoutp.php"><button>ajouter</button></p></a>
            </p>
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');

$sqlQuery = 'SELECT * FROM produit ';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>
    <p><?php echo '<div><p><img src="images/'.$produit['image'].'" style="float:left" height="150" width="150"></p><p><a href="produit.php?id='.$produit['nom'].'">'.$produit['nom'].'</p></img></a>
     <p><a href="contenu/supprb.php?id='.$produit['id'].'&type=produit"><button>supprimer</button></p></a>
     <p><a href="modifp.php?id='.$produit['id'].'"><button>modifier</button></p></a>
    </div><br><br><br><br><br><br><br><br> '  ; ?></p>
<?php
}
?>>
  </body>
</html>
        