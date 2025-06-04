<?php session_start(); ?>
<?php
  
$conn = "";

try {
    $servername = "localhost";
    $dbname = "u783201149_eaZeP";
    $username = "root";
    $password = "";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=u783201149_eaZeP",
        $username, $password
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM User");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['Username'] == $adminname) && 
            ($user['mdp'] == $password)) {
                
                $_SESSION['username'] = $user['Username'];
                $_SESSION['statut'] = $user['statut'];
                
                header("Location: ../accueil.php");
        }
        else {
            $_SESSION['statut']= "erreur";
            header("Location: ../index.php");
            die();
        }
    }
}
  
?>