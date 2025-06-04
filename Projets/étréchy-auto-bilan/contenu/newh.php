<?php

if (isset($_POST['newjour'])) {
$id1 = 1;
$id2 = 2;
$id3 = 3;
$db = new PDO('mysql:host=localhost;dbname=u783201149_Util;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE horaires SET horaires = :jour WHERE id = :id1";
$sql2 = "UPDATE horaires SET horaires = :matin WHERE id = :id2";
$sql3 = "UPDATE horaires SET horaires = :aprem WHERE id = :id3";

$stmt = $db->prepare($sql);                                  
$stmt->bindParam(':jour', $_POST['newjour'], PDO::PARAM_STR); 
$stmt->bindParam(':id1',$id1); 
$stmt->execute();

$stmt2 = $db->prepare($sql2);                                  
$stmt2->bindParam(':matin', $_POST['newmatin'], PDO::PARAM_STR); 
$stmt2->bindParam(':id2',$id2); 
$stmt2->execute();

$stmt3 = $db->prepare($sql3);                                  
$stmt3->bindParam(':aprem', $_POST['newaprem'], PDO::PARAM_STR); 
$stmt3->bindParam(':id3',$id3); 
$stmt3->execute();

  // vérifier si la requête d'insertion a réussi
  if($stmt3){
       header('Location: /indexp.php');
  }else{
    echo "Une erreur est survenue !";
  }
}
?>