<!DOCTYPE html>
   <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>modifications des boutiques</title>
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
<p>
    <div id="container">
    <form method="post" action="contenu/ajoutb.php" enctype="multipart/form-data">
      <h1>Entrez les informations<h1>
      <label><b>Ville</b></label>
      <input name="ville" value="">
      <label><b>Horaires</b></label>
      <input name="horaires" value="" style="width: 355px;"><br>
      <label><b>Numéro et nom de la rue</b></label>
      <input name="rue" value="">
      <label><b>code postal</b></label>
      <input name="cp" value="">
      <label><b>téléphone</b></label>
      <input name="telephone" value="">
      <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
     Image : <input type="file" name="bou">
     <input type="submit" id="submit" name="submit">
    </form>
    </div></p>

  </body>
</html>