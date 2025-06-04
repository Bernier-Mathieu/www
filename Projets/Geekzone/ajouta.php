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
    <form method="post" action="contenu/ajouta.php" enctype="multipart/form-data">
      <h1>Entrez les nouvelles informations<h1>
      <label><b>Nom</b></label>
      <input name="nom" value="">
      <label><b>Mot de passe</b></label>
      <input name="mdp" value="" ><br>
      <label><b>Boutique</b></label>
      <select name="bou" id="bou">
      <option value="">--choissisez une catégorie--</option>';
       $sqlQuery = 'SELECT * FROM boutique';
       $produitStatement = $db->prepare($sqlQuery);
       $produitStatement->execute();
       $produit = $produitStatement->fetchAll();
       foreach ($produit as $produit) {
       echo '
      <option value='.$produit['id'].'>'.$produit['ville'].'</option>';
} 
      echo '
     <input type="submit" id="submit" name="submit">
    </form>
    </div>';  ?></p>

  </body>
</html>