<?php
try
{
	// On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=u783201149_Util;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM horaires';
$horairesStatement = $db->prepare($sqlQuery);
$horairesStatement->execute();
$horaires = $horairesStatement->fetchAll();

foreach ($horaires as $horaires) {
?>
    <p><?php echo $horaires['horaires']; ?></p>
<?php
}
?>