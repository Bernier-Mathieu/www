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
            <p  id="centre">
              <a href="ajoutb.php"><button>ajouter</button></p></a>
            </p>
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');


$sqlQuery = 'SELECT * FROM boutique';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>
    <p><?php echo '
    <div id="centre"><p><img src="images/'.$produit['image'].'" style="float:left" height="300" width="300"></p><br>
    <div id="texte"><p>Ville : '.$produit['ville'].'</p></div>
         
         <p><a href="modifb.php?id='.$produit['id'].'&type=boutique"><button>modifier</button></p></a>
         <p><a href="contenu/supprb.php?id='.$produit['id'].'&type=boutique"><button>supprimer</button></p></a>
    </div>
    <div style="margin-top:6cm">
        
    </div>'  ; ?></p>
<?php
}
?>
    </div>
  </body>
</html>
