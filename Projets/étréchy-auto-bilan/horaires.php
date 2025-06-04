<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Horaires et Tarifs</title>
    <meta meta="" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/horaires.css">
    <link rel="shortcut icon" href="images/favicon.ico" >
    <link rel="icon" type="image/gif" href="images/animated_favicon1.gif" >
  </head>
  <body>
    <!--Création de la bannière ainsi que l'entête-->
    <?php include ('contenu/header.php'); ?>
    <?php include ('contenu/tarifs.php'); ?>
    <!--Affichage de l'image -->
    <div id="img">
      <p> <img id="img" src="images/austin2.png" alt=""></p>
    </div>
    <p id="Nom">Horaires et Tarifs</p>
    <!-- Affichage du texte -->
    <div id="horaire">
      Les horaires : <br> 
    <p><?php include ('contenu/horaires.php'); ?> et le samedi <br> de 8h30 à 12h </p>
    </div>
    <div id="logo">
      <img src="images/auto.png">
    </div>
    <br>
<div id="tableau">
<table id="table">
   <thead>
     <tr>
       <th>Contrôle</th>
       <th>Prix</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td id="td"><?php echo htmlspecialchars($row['type']); ?></td>
       <td id="td"><?php echo htmlspecialchars($row['prix']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
 <p><i>TVA de 20%</i></p>

</div>
   
  </body>
</html>