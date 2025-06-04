<?php
$photo = $_POST['nom'];
$dossier = '../images/';
$fichier = basename($_FILES['pro']['name']);
$taille_maxi = 100000000;
$taille = filesize($_FILES['pro']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['pro']['name'], '.'); 
$photo = "$photo + $extension";
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = $photo;
     if(move_uploaded_file($_FILES['pro']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}

 if (isset($_POST['nom'])) {
$nom = $_POST['nom'];
$description =$_POST['description'];
$detail = $_POST['detail'];
$prix = $_POST['prix'];
$cat = $_POST['cat'];


$db = $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `produit` (`id`, `nom`, `description`, `detail`, `prix`, `image`, `categorie`) VALUES (NULL, '$nom', '$description', '$detail', '$prix', '$photo', '$cat')";
$change = $db->prepare($sql);
$change->execute();     

 header("Location: ../produitadmin.php");

} 
?>