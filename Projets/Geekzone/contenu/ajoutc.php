<?php
 if (isset($_POST['nom'])) {
$nom = $_POST['nom'];

$db = $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = 'INSERT INTO `categorie` (`id`, `libelle`) VALUES (NULL, "'.$nom.'")';
$change = $db->prepare($sql);
$change->execute();     

 header("Location: ../categorieadmin.php");

} 
?>