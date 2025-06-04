<?php  
$db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');$lien = $_GET['id'];
$sqlQuery = 'DELETE FROM Notes WHERE id_notes = '.$lien.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
header("Location: mywrites.php");
?>