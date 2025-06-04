<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>modification d'annonce</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <link rel="shortcut icon" href="images/favicon.ico" >
    <link rel="icon" type="image/gif" href="images/animated_favicon1.gif" >
  </head>
  <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header2.php'); ?>
    <!--Affichage de l'image -->
    <div id="img">
      <p> <img id="img" src="images/austin.png" alt=""></p>
    </div>
    <!-- Affichage du texte -->
    <div id="container">
      <!-- zone de connexion -->
      
      <form action="contenu/newa.php" method="POST">
          <h1>Nouvelle annonce</h1>
          
          <label><b>La nouvelle annonce</b></label>
          <input type="text" placeholder="Entrer la nouvelle annonce" name='newannonce' required>
          <input type="submit" id='submit' value='Valider' name='submit'>
      </form>
  </div>
    </div>
  </body>
</html>