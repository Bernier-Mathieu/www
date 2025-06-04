<?php

session_start();

if (isset($_POST['titre'])) {
$titre = $_POST['titre'];
$texte = $_POST['txt'];
$statut = $_POST['statut'];
$id = $_SESSION['id'];

$db = $db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO `histoires`(`id_user`, `titre`, `texte`, `poster` ) VALUES ("'.$id.'","'.$titre.'","'.$texte.'","'.$statut.'")';
$change = $db->prepare($sql);
$change->execute();  
$_SESSION['erreur'] = "";

 header("Location: mystories.php");
     }
?>