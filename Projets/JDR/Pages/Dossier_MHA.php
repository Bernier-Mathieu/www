<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dossier Interactif</title>
    <link rel="stylesheet" href="../CSS/Dossier_Mha.Css">
</head>
<?php include ('../Back/ConnexionBDD.php'); ?>
<body>
    <header>
    <nav class="navbar navbar-expand-md fixed-top navbar-light" style="background-color:#555151;">
    <div class="container-fluid" id="btnretour">
        <a class="navbar-brand text-uppercase fw-bold" href="MHA.php">
            <span class="bg-gradient p-1 rounded-3 text-light" style="background-color: #0080ff;">Retour à la selection des Personnages</span>
        </a>
    </div>
</nav>  
    </header>
    <div class="container">
    <?php    
$lien = $_GET['id'];
$sqlQuery = 'SELECT * FROM Perso where N_Perso = '.$lien.'';
$persoStatement = $db->prepare($sqlQuery);
$persoStatement->execute();
$persos = $persoStatement->fetchAll();

foreach ($persos as $perso) {
    //Page de Couverture
    echo '<div class="cover page">';
    if ($perso['Type'] == 'Heros' and $perso['Sexe'] == 'Homme') {
        echo '<h1 id="Titre">Dossier du Héros '.$perso['Surnom'].' </h1>';
    } elseif ($perso['Type'] == 'Heros' and $perso['Sexe'] == 'Femme') {
        echo '<h1 id="Titre">Dossier de l\'héroine '.$perso['Surnom'].' </h1>';
    } elseif ($perso['Type'] == 'Eleve') {
        echo '<h1 id="Titre">Dossier de l\'élève '.$perso['Surnom'].' </h1>';
    } elseif ($perso['Type'] == 'Clandestin' and $perso['Sexe'] == 'Homme') {
        echo '<h1 id="Titre">Dossier du Héros Clandestin '.$perso['Surnom'].' </h1>';
    } elseif ($perso['Type'] == 'Clandestin' and $perso['Sexe'] == 'Femme') {
        echo '<h1 id="Titre">Dossier de l\'Héroine Clandestine '.$perso['Surnom'].' </h1>';
    }    
    echo '<p id="classified">Classified</p></div>';

    //Première Page "carte d'identité"
    echo '<div class="page" id="page-1">
            <h2 ID="Page_Header">Identitée de la Personne</h2>
        </div>';
}
?>
        <div class="page" id="page-1">
            <h2>Page 2</h2>
            <p>Contenu de la page 2</p>
        </div>
        <div class="page" id="page-2">
            <h2>Page 3</h2>
            <p>Contenu de la page 3</p>
        </div>
        <div class="page" id="page-3">
            <h2>Page 4</h2>
            <p>Contenu de la page 4</p>
        </div>
        <div class="cover page">
        </div>
    </div>
    <div class="controls">
        <button id="prev-btn">Précédent</button>
        <button id="next-btn">Suivant</button>
    </div>
    <footer class="row fixed-bottom text-center" id="Footer">
        <p>JDR AND ROLEPLAY @2024 Kihonen</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5pN5pDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../JS/Dossier.js"></script>
</body>
</html>
