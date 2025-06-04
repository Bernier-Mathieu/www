<?php
 if (isset($_POST['nom'])) {
$nom = $_POST['nom'];
$id = $_POST['id1'];

$db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE `categorie` SET `libelle`='$nom' WHERE id = $id";
$change = $db->prepare($sql);
$change->execute();     

 header("Location: ../categorieadmin.php");

} 
?>