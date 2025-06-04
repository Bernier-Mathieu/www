<?php
if (isset($_POST['nom'])) {
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$cp = $_POST['cp'];
$telephone = $_POST['tel'];
$mail = $_POST['mail'];
$pass = "123456"; 
$mdp = password_hash($pass,PASSWORD_DEFAULT);
$pln = substr($prenom,0,1);
$login = "$pln$nom";
$statut = "client";
echo "$nom  $prenom $adresse $ville $cp $telephone $mail $mdp $login $statut";


$db = $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO `User`(`Username`, `mdp`, `nom`, `prenom`, `telephone`, `mail`, `ville`, `cp`, `adresse`, `statut`, `id`) VALUES ("'.$login.'","'.$mdp.'","'.$nom.'","'.$prenom.'","'.$telephone.'","'.$mail.'","'.$ville.'","'.$cp.'","'.$adresse.'","'.$statut.'",NULL)';
$change = $db->prepare($sql);
$change->execute();     

 header("Location: ../ajoutcli.php");

} 
?>