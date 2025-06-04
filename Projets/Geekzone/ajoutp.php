<!DOCTYPE html>
   <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>modifications des produits</title>
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
    <p><?php 
    $db = $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
    echo ' 
    <div id="container">
    <form method="post" action="contenu/ajoutp.php" enctype="multipart/form-data">
      <h1>Entrez les nouvelles informations<h1>
      <label><b>Nom</b></label>
      <input name="nom" value="">
      <label><b>Description</b></label>
      <input name="description" value="" style="width: 355px;"><br>
      <label><b>Détails</b></label>
      <input name="detail" value="">
      <label><b>Prix</b></label>
      <input name="prix" value="">
      <label><b>Catégorie</b></label>
      <select name="cat" id="cat">
      <option value="">--choissisez une catégorie--</option>';
       $sqlQuery = 'SELECT * FROM categorie';
       $produitStatement = $db->prepare($sqlQuery);
       $produitStatement->execute();
       $produit = $produitStatement->fetchAll();
       foreach ($produit as $produit) {
       echo '
      <option value='.$produit['id'].'>'.$produit['libelle'].'</option>';
} 
      echo '
      <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
     Image : <input type="file" name="pro">
     <input type="submit" id="submit" name="submit">
    </form>
    </div>';  ?></p>

  </body>
</html>