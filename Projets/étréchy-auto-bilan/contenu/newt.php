<?php

if (isset($_POST['submit'])) {
$id2 = 2;
$id3 = 3;
$id4 = 4;
$id5 = 5;
$id6 = 6;
$id7 = 7;
$id8 = 8;
$id9 = 9;
$id10 = 10;
$id11 = 11;
$db = new PDO('mysql:host=localhost;dbname=u783201149_Util;charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE tarifs SET prix = :p1 WHERE id = :id2";
$sql2 = "UPDATE tarifs SET prix = :p2 WHERE id = :id3";
$sql3 = "UPDATE tarifs SET prix = :p3 WHERE id = :id4";
$sql4 = "UPDATE tarifs SET prix = :p4 WHERE id = :id5";
$sql5 = "UPDATE tarifs SET prix = :p5 WHERE id = :id6";
$sql6 = "UPDATE tarifs SET prix = :p6 WHERE id = :id7";
$sql7 = "UPDATE tarifs SET prix = :p7 WHERE id = :id8";
$sql8 = "UPDATE tarifs SET prix = :p8 WHERE id = :id9";
$sql9 = "UPDATE tarifs SET prix = :p9 WHERE id = :id10";
$sql10 = "UPDATE tarifs SET prix = :p10 WHERE id = :id11";

$stmt = $db->prepare($sql);                                  
$stmt->bindParam(':p1', $_POST['p1'], PDO::PARAM_STR); 
$stmt->bindParam(':id2',$id2); 
$stmt->execute();

$stmt2 = $db->prepare($sql2);                                  
$stmt2->bindParam(':p2', $_POST['p2'], PDO::PARAM_STR); 
$stmt2->bindParam(':id3',$id3); 
$stmt2->execute();

$stmt3 = $db->prepare($sql3);                                  
$stmt3->bindParam(':p3', $_POST['p3'], PDO::PARAM_STR); 
$stmt3->bindParam(':id4',$id4); 
$stmt3->execute();

$stmt4 = $db->prepare($sql4);                                  
$stmt4->bindParam(':p4', $_POST['p4'], PDO::PARAM_STR); 
$stmt4->bindParam(':id5',$id5); 
$stmt4->execute();

$stmt5 = $db->prepare($sql5);                                  
$stmt5->bindParam(':p5', $_POST['p5'], PDO::PARAM_STR); 
$stmt5->bindParam(':id6',$id6); 
$stmt5->execute();

$stmt6 = $db->prepare($sql6);                                  
$stmt6->bindParam(':p6', $_POST['p6'], PDO::PARAM_STR); 
$stmt6->bindParam(':id7',$id7); 
$stmt6->execute();

$stmt7 = $db->prepare($sql7);                                  
$stmt7->bindParam(':p7', $_POST['p7'], PDO::PARAM_STR); 
$stmt7->bindParam(':id8',$id8); 
$stmt7->execute();

$stmt8 = $db->prepare($sql8);                                  
$stmt8->bindParam(':p8', $_POST['p8'], PDO::PARAM_STR); 
$stmt8->bindParam(':id9',$id9); 
$stmt8->execute();

$stmt9 = $db->prepare($sql9);                                  
$stmt9->bindParam(':p9', $_POST['p9'], PDO::PARAM_STR);
$stmt9->bindParam(':id10',$id10); 
$stmt9->execute();

$stmt10 = $db->prepare($sql10);                                  
$stmt10->bindParam(':p10', $_POST['p10'], PDO::PARAM_STR); 
$stmt10->bindParam(':id11',$id11); 
$stmt10->execute();


  // vérifier si la requête d'insertion a réussi
  if($stmt10){
       header('Location: /indexp.php');
  }else{
    echo "Une erreur est survenue !";
  }
}
?>