<?php

session_start();

if (isset($_POST['login'])) {
$login = $_POST['login'];
$mdp = $_POST['password'];

$db =$db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requser = $db->prepare("SELECT * FROM Utilisateurs WHERE pseudo = ?");
$requser->execute(array($login));
$userexist = $requser->rowCount();
if($userexist == 1) {
         $_SESSION['erreur'] = "deja";
         header("Location: inscrit.php");
      } else {
$sql = 'INSERT INTO `Utilisateurs`(`pseudo`, `mdp`, `id`) VALUES ("'.$login.'","'.$mdp.'",NULL)';
$change = $db->prepare($sql);
$change->execute();  
$_SESSION['erreur'] = "";

 header("Location: login.php");
      }
} 
?>