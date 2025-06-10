<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/accueil.css">
</head>
    <header>
        <?php include ('Back/header.php'); ?>
    </header>
<body style="background: linear-gradient(45deg, #471A33, #1c1c1c); color: white;">
  <div class="container mt-5">
    <h2 class="text-center text-danger">Connexion</h2>
    <form action="Back/verif_connect.php" method="POST" class="bg-dark p-4 rounded shadow w-50 mx-auto">
      <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text"  placeholder="Entrer le nom d'utilisateur" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" placeholder="Entrer le mot de passe" class="form-control" id="password" name="password" required>
         <?php  if (isset($_SESSION['erreur'])) {
                $erreur = $_SESSION['erreur'];
                if($erreur == "mdpuser"){
                    echo '<p id="erreur">Nom d\'utilisateur ou mot de passe incorrect</p>';
                }elseif($erreur == "deja"){
                    echo '<p id="erreur">Nom d\'utilisateur déjà utilisé</p>';
                }elseif($erreur == "connect"){
                    echo '<p id="erreur">Compte créer veuillez vous connectez</p>';
                }
            }?>
      </div>
      <button type="submit" class="btn btn-danger btn-block" name="Connect">Se connecter</button>
      <button type="submit" class="btn btn-danger btn-block" name="Inscrire">S'inscrire</button>
    </form>
  </div>
</body>
</html>
