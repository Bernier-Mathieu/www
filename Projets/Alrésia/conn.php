<?php

session_start();
 
$bdd = $db  = new PDO('mysql:host=localhost;dbname=u783201149_alresia;charset=utf8', 'root', '');
 
if(isset($_POST['login'])) {
   $login = $_POST['login'];
   $mdp = $_POST['password'];
   if(!empty($login) AND !empty($mdp)) {
      $requser = $bdd->prepare("SELECT * FROM Utilisateurs WHERE pseudo = ? AND mdp = ?");
      $requser->execute(array($login, $mdp));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
          $userinfo = $requser->fetchAll();
         foreach ($userinfo as $userinfo) {
         $_SESSION['login'] = $userinfo['pseudo'] ;
         $_SESSION['id'] = $userinfo['id'] ;
         $_SESSION['statut'] = $userinfo['statut'] ;
         $_SESSION['erreur'] = "";
         header("Location: index.php");
        }}else {
          $_SESSION['erreur'] = "mdpuser";
         header("Location: login.php");
      }
   } 
}
