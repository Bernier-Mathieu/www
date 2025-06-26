<?php
// On demarre la session AVANT d'ecrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Memory</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  </head>
  <body>    
        <button onclick="popup()" class="btn btn-danger" id="Return">Retour au choix des jeux</button>
        <game id="game"><canvas id="app"></canvas></game>
        <script type="module" src="Back/app.js"></script>
        <script src="../Back/other.js"></script>
        <script>
        const userSession = "<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'invité'; ?>";
        </script>
  </body>
</html>