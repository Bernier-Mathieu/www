<?php

session_start();

$bdd = $db = new PDO('mysql:host=localhost;dbname=incroyjeux;charset=utf8', 'root', '');


if (isset($_POST['Connect'])) {
   // Traitement de connexion
   if (isset($_POST['username'])) {

      $password = $_POST['password'];
      if (!empty($username) and !empty($password)) {
         $requser = $bdd->prepare("SELECT * FROM users WHERE Name = ?");
         $requser->execute(array($username));
         $userexist = $requser->rowCount();
         if ($userexist == 1) {
            $userinfo = $requser->fetch();
            if ($userinfo && password_verify($password, $userinfo['Password'])) {
                  $_SESSION['username'] = $userinfo['Name'];
                  $_SESSION['id'] = $userinfo['User_Id'];
                  $_SESSION['erreur'] = NULL;
                  header("Location: ../index.php");
                  exit();
            }
         } else {
            $_SESSION['erreur'] = "mdpuser";
            header("Location: ../connect.php");
         }
      }
   }
} elseif (isset($_POST['Inscrire'])) {
   // Redirection vers une page d'inscription ou autre action
   if (isset($_POST['username'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      $requser = $db->prepare("SELECT * FROM users WHERE Name = ?");
      $requser->execute(array($username));
      $userexist = $requser->rowCount();
      if ($userexist == 1) {
         $_SESSION['erreur'] = "deja";
         header("Location: ../connect.php");
      } else {
         $sql = 'INSERT INTO Users(Name, Password) VALUES (?, ?)';
         $change = $bdd->prepare($sql);
         $change->execute([$username, $passwordHash]);
         $_SESSION['erreur'] = "connect";

         header("Location: ../connect.php");
      }
   }
}
