<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/accueil.css"> <!-- pour garder ton style -->
</head>
    <header>
        <?php include ('Back/header.php'); ?>
    </header>
<body style="background: linear-gradient(45deg, #471A33, #1c1c1c); color: white;">
  <div class="container mt-5">
    <h2 class="text-center text-danger">Connexion</h2>
    <form action="verif_connect.php" method="POST" class="bg-dark p-4 rounded shadow w-50 mx-auto">
      <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-danger btn-block">Se connecter</button>
    </form>
  </div>
</body>
</html>
