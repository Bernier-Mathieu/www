	<?php
session_start();
 
$bdd =  $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
 
if(isset($_POST['login'])) {
   $login = $_POST['login'];
   $mdp = $_POST['password'];
   $statut = "adminb";
   if(!empty($login) AND !empty($mdp)) {
      $requser = $bdd->prepare("SELECT * FROM User WHERE Username = ? AND mdp = ? AND statut = ?");
      $requser->execute(array($login, $mdp,$statut));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetchAll();
         $_SESSION['login'] = $userinfo['Username'];
         $_SESSION['statut'] = "adminb";
         header("Location: ../indexadminbou.php");
      } else {
         header("Location: ../loginb.php");
      }
   } else {
      header("Location: ../loginb.php");
   }
   
}