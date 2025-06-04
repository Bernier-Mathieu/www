<?php

session_start();

if (isset($_POST['titre'])) {
$titre = $_POST['titre'];
$note = $_POST['note'];
$id = $_SESSION['id'];

$db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO `Notes`(`id_user`, `titre`, `note`) VALUES ("'.$id.'","'.$titre.'","'.$note.'")';
$change = $db->prepare($sql);
$change->execute();  
$_SESSION['erreur'] = "";

 header("Location: mywrites.php");
      }
?>