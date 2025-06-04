<?php
 if (isset($_POST['titre'])) {
$titre = $_POST['titre'];
$txt = $_POST['txt'];
$statut = $_POST['statut'];
$id = $_POST['id'];

$db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE `histoires` SET `titre`='$titre',`texte`='$txt' ,`poster`='$statut' WHERE id_histoire = $id";
$change = $db->prepare($sql);
$change->execute();     

 header("Location: mystories.php");
} 
?>