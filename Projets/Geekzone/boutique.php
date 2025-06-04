<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>boutique</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="shortcut icon" href="images/logo.png" >
  </head>
  <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header.php'); ?>
    <!--Affichage de l'image -->
    <div>
      <img id="imgprin" src="images/geek.jpg" alt="">
    </div> <!-- création du boutiques, ses différents photos et du bouton acheter-->
        <div>
<?php   $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');

$lien = $_GET['id'];
$sqlQuery = 'SELECT * FROM boutique WHERE id = "'.$lien.'"';
$boutiqueStatement = $db->prepare($sqlQuery);
$boutiqueStatement->execute();
$boutique = $boutiqueStatement->fetchAll();

foreach ($boutique as $boutique) {
?>
    <p><?php echo ' <div id="centre"><p><img src="images/'.$boutique['image'].'" style="float:left" height="500" width="500"></p>
         <div id="texte"><p>'.$boutique['ville'].'</p><br></div>
         <p>Les Horaires : '.$boutique['horaires'].'</p><br>
         <p>où nous trouvez : '.$boutique['rue'].'&nbsp;'.$boutique['cp'].'</p><br>
         <p>Nous contactez : '.$boutique['telephone'].'</p><br>
         
    </div>'; ?></p>
<?php
}
?>
    </div>
     
  </body>
</html>
