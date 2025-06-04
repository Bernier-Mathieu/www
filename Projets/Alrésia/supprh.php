<?php  
$db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');$lien = $_GET['id'];
$sqlQuery = 'DELETE FROM histoires WHERE id_histoire = '.$lien.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
header("Location: mystories.php");
?>