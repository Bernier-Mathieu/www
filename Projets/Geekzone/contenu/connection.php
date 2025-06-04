	<?php
session_start();
 
$bdd =  $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
 
if(isset($_POST['login'])) {
   $login = $_POST['login'];
   $mdp = $_POST['password'];
   $statut = "client";
   if(!empty($login) AND !empty($mdp)) {
      $requser = $bdd->prepare("SELECT * FROM User WHERE Username = ? AND mdp = ? AND statut = ?");
      $requser->execute(array($login, $mdp,$statut));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetchAll();
         $_SESSION['login'] = "$login";
         $_SESSION['mdp'] = "$mdp";
         $_SESSION['statut'] = "client";
         header("Location: ../test.php");
      } else {
        header("Location: ../login.php");
      }
   } else {
      header("Location: ../login.php");
   }
   
}
