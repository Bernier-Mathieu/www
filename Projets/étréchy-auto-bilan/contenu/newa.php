<?php

if (isset($_POST['newannonce'])) {

  $db = new PDO('mysql:host=localhost;dbname=u783201149_Util;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE annonce SET annonce = :annonce";
$id = 1;    
$stmt = $db->prepare($sql);                                  
$stmt->bindParam(':annonce', $_POST['newannonce'], PDO::PARAM_STR);  
$stmt->execute();
  // vérifier si la requête d'insertion a réussi
  if($stmt){
       header('Location: /indexp.php');
  }else{
    echo "Une erreur est survenue !";
  }
}
?>