<?php
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $db = new PDO('mysql:host=localhost;dbname=u783201149_Util;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM User where username = ? AND password = ?";
    $result = $db->prepare($sql);
    $result->execute(array($username,$pass));
    $userexist = $result->rowCount();
      if($userexist == 1) {
          $_SESSION['username'] = "$username";
        header("Location: ../indexp.php");
      }}
?>
   
