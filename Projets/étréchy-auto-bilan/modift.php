<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>modification de tarification</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/index.css">
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
    <div id="zt">
    <h1>Entrez les nouveaux tarifs<h1>
    <br>
    <form method="post" action="contenu/newt.php">
    <label for="name"><p>contrôle obligatoire VL voiture</p></label> <input type="text" name="p1" value="79€">
    <label for="name"><p>contrôle obligatoire VUL 4x4 / utilitaire</p></label> <input type="text" name="p2" value="85€">
    <label for="name"><p>visite complémentaire</p></label> <input type="text" name="p3" value="30€">
    <label for="name"><p>supplément gaz gpl ou gnv</p></label> <input type="text" name="p4" value="25€">
    <label for="name"><p>contrôle véhicules électrique ou hybride</p></label> <input type="text" name="p5" value="85€">
    <label for="name"><p>contre visite visuel</p></label> <input type="text" name="p6" value="10€">
    <label for="name"><p>contre visite mesures</p></label> <input type="text" name="p7" value="25€">
    <label for="name"><p>contre visite extérieur</p></label> <input type="text" name="p8" value="30€">
    <label for="name"><p>contrôle volontaire total</p></label> <input type="text" name="p9" value="79€">
    <label for="name"><p>contrôle volontaire partiel</p></label> <input type="text" name="p10" value="25€"> 
    <input type="submit" id='submit' name='submit'>
    </form>
    </div>
  </body>
</html>