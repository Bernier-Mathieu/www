<?php
$photo = $_POST['ville'];
$photo = $photo + $extension;
$dossier = '../images/';
$fichier = basename($_FILES['bou']['name']);
$taille_maxi = 100000000;
$taille = filesize($_FILES['bou']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['bou']['name'], '.'); 
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
     if(move_uploaded_file($_FILES['bou']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
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

 if (isset($_POST['ville'])) {
$ville = $_POST['ville'];
$horaires =$_POST['horaires'];
$rue = $_POST['rue'];
$cp = $_POST['cp'];
$telephone = $_POST['telephone'];
$id = $_POST['id1'];

$db = $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `boutique` (`id`, `rue`, `cp`, `ville`, `image`, `telephone`, `horaires`) VALUES (NULL, '$rue', '$cp', '$ville', '$photo', '$telephone', '$horaires')";
$change = $db->prepare($sql);
$change->execute();     

 header("Location: ../boutiqueadmin.php");

} 
?>