<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$lien = $_GET['id'];
$type = $_GET['type'];
$sqlQuery = 'DELETE FROM '.$type.' WHERE id = '.$lien.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
header("Location: ../indexadmin.php");
?>