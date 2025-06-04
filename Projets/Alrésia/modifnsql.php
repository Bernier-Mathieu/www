<?php
 if (isset($_POST['titre'])) {
$titre = $_POST['titre'];
$note = $_POST['note'];
$id = $_POST['id'];

$db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE `Notes` SET `titre`='$titre',`note`='$note' WHERE id_notes = $id";
$change = $db->prepare($sql);
$change->execute();     

 header("Location: mywrites.php");

} 
?>