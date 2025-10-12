<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dossier Interactif</title>
    <link rel="stylesheet" href="../CSS/Dossier_Mha.Css">
</head>
<?php include('../../Back/ConnexionBDD.php'); ?>
<?php include('../PHP/PagesMHABody.php'); ?>
    <header>
        <nav class="navbar navbar-expand-md fixed-top navbar-light" style="background-color:#555151;">
            <div class="container-fluid" id="btnretour">
                <a class="navbar-brand text-uppercase fw-bold" href="MHA.php">
                    <span class="bg-gradient p-1 rounded-3 text-light" style="background-color: #0080ff;">Retour à la selection des Personnages</span>
                </a>
            </div>
        </nav>
    </header>
<Body>
    <div class="container">
        <?php include('../PHP/PagesMHA.php'); ?>
        <div class="page" id="page-1">
            <div class="Row">
                <h2>Page 2</h2>
                <p>Contenu de la page 2</p>
            </div>
        </div>
        <div class="page" id="page-2">
            <h2>Page 3</h2>
            <p>Contenu de la page 3</p>
        </div>
        <div class="page" id="page-3">
            <h2>Page 4</h2>
            <p>Contenu de la page 4</p>
        </div>
        <div class="cover page cover-back">
        </div>
    </div>
    <div class="controls">
        <button id="prev-btn">Précédent</button>
        <button id="next-btn">Suivant</button>
    </div>
    <footer class="row fixed-bottom text-center" id="Footer">
        <p>JDR AND ROLEPLAY @2024 Kihonen</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../JS/Dossier.js"></script>
</body>

</html>