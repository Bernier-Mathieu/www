	<?php
session_start();
 
$bdd =  $db = new PDO('mysql:host=localhost;dbname=u783201149_eaZeP;charset=utf8', 'root', '');
 
if(isset($_POST['login'])) {
   $login = $_POST['login'];
   $mdp = $_POST['password'];
   $mdpn = $_POST['passwordn'];
   if(!empty($login) AND !empty($mdp)) {
      $requser = $bdd->prepare("UPDATE `User` SET `mdp`='$mdpn' WHERE Username = '.$login.' AND mdp =$mdp");
      $requser->execute(array($login, $mdp,$statut));
      $userexist = $requser->rowCount();
         header("Location: ../index.php");
      } else {
        header("Location: ../login.php");
      }
   } else {
      header("Location: ../login.php");
   }
   
