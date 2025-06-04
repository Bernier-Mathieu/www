<?php
session_start();  // démarrage d'une session
?>
<?php    $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
   $login = $_POST['login'];
   $pass = $_POST['password'];
   $hmdp = password_hash($pass,PASSWORD_DEFAULT);
   $mdp = password_verify($pass, $hmdp);
   $statut = "client";

$sqlQuery = "SELECT * FROM User WHERE Username = ? AND mdp = ? AND statut = ?";
$produitStatement = $db->prepare($sqlQuery);
$produitStatement->execute(array($login, $mdp,$statut));
$produitStatement->execute();
$produit = $produitStatement->fetchAll();

foreach ($produit as $produit) {
?>
    <p><?php echo ' <div id="texte"><p>pseudo :'.$produit['Username'].'</p><br>Mot de passe:'.$produit['mdp'].'<br>Nom:'.$produit['nom'].'<br>prenom:'.$produit['prenom'].'
    <br>adresse:'.$produit['adresse'].'<br>ville:'.$produit['ville'].'<br>code postal:'.$produit['cp'].'<br>téléphone:'.$produit['telephone'].'<br>Mail:'.$produit['mail'].'</div> </div>' 
    ; ?></p>
<?php
}
?>