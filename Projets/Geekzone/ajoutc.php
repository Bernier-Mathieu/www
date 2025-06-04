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

    <div id="container">
    <form method="post" action="contenu/ajoutc.php" enctype="multipart/form-data">
      <h1>Entrez les informations<h1>
      <label><b>Nom</b></label>
      <input name="nom" value="">
      <input type="hidden" name="id1" value='.$produit['id'].'>
     <input type="submit" id="submit" name="submit">
    </form>
    </div></p>
  </body>
</html>