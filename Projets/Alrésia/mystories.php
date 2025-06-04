<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Accueil</title>
    <meta meta="" name="viewport">
      <link rel="shortcut icon" href="/images/icon.ico"/>
      <link rel="apple-touch-icon" href="/images/icon.ico"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/texte.css">
      <link rel="stylesheet" type="text/css" href="css/images.css">
    </head>
    <body>
        <?php include ('contenu/header.php'); ?>
        <div id="accueil">
    <?php   
        if(isset($_SESSION['login'])) {
            $id = $_SESSION['id'];
            echo '<p>Vos Histoires :</p><br><p><a href="creahis.php">Ajoutez une histoire</a></p>';
            $db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');
            
        $sqlQuery = 'SELECT * FROM histoires WHERE id_user = "'.$id.'"';
        $produitStatement = $db->prepare($sqlQuery);
        $produitStatement->execute();
        $produit = $produitStatement->fetchAll();
        
        foreach ($produit as $produit) {

         echo '<p><a href="storie.php?id='.$produit['id_histoire'].'"> '.$produit['titre'].' </p></a>
         <a href="supprh.php?id='.$produit['id_histoire'].'"><p>Supprimer</p></a>
         <a href="modifh.php?id='.$produit['id_histoire'].'"><p>modifier</p></a><br><br><br>';
        }}else{
            echo '<a href="login.php"><p id="accueil">Veuillez d\'abord vous connecter !</p></a>';
        }
        
        
        ?>
    <script src='https://cdn.jsdelivr.net/npm/@widgetbot/crate@3' async defer>
    new Crate({
        server: '876863306504228904', // Alrésia
        channel: '877289520394039367' // #commande-administration
    })
    </script>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>