<html>
    <head>
        <meta charset="UTF-8">
        <title>My Hero Academya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../CSS/MHA.Css" rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body id="Body" class="container-fluid">
        <header id="Title" class="Row">
            <p>My Hero Academya</p>
        </header>
        <div class="Row">
        <?php include ('../Back/ConnexionBDD.php'); ?>
<?php    
$sqlQuery = 'SELECT * FROM Perso P 
Left outer join Univers U on P.N_univers = U.N_univers
Left outer join Image I on I.N_Perso = P.N_Perso
where u.Nom_univers= "mha" and I.Statut = "Selection"';
$persoStatement = $db->prepare($sqlQuery);
$persoStatement->execute();
$persos = $persoStatement->fetchAll();

foreach ($persos as $perso) {
    echo '<div class="col-sm-4" id="Perso">
            <a href="Dossier_MHA.php?id='.$perso['N_Perso'].'" style="text-decoration:none; color:#000;">
            <p>Prenom : ' . htmlspecialchars($perso['Prenom'], ENT_QUOTES, 'UTF-8') . '</p>
            <p>Nom : ' . htmlspecialchars($perso['Nom'], ENT_QUOTES, 'UTF-8') . '</p>
            <img id="img" src="' . htmlspecialchars($perso['Chemin'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($perso['Prenom'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($perso['Nom'], ENT_QUOTES, 'UTF-8') . '">
            </a>
          </div>';
}
?>
        </div>
        <footer class="Row fixed-bottom" id="Footer">
            <p>JDR AND ROLEPLAY @2024 Kihonen</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5pN5pDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
