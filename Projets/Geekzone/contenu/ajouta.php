<?php
if (isset($_POST['nom'])) {
$nom = $_POST['nom'];
$bou =$_POST['bou'];
$mdp = $_POST['mdp'];
$statut = "adminb";
$db = $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `User`(`Username`, `mdp`, `statut`, `id`) VALUES ('$nom','$mdp','$statut',NULL);";
$change = $db->prepare($sql);
$change->execute(); 

$sqlQuery = 'SELECT Username , id  
FROM User 
WHERE Username = '.$nom.'AND mdp = '.$mdp.'';
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute();
$produit = $produitStatement->fetchAll();
foreach ($produit as $produit) {
?>
<?php
$ida = $produit['id'];
$sql = "INSERT INTO `gérer` (`id_adb`, `id_b`) VALUES ('$ida', '$bou')";
$change = $db->prepare($sql);
$change->execute();  

 header("Location: ../admin.php");
 ?>
<?php
}
} 
?>