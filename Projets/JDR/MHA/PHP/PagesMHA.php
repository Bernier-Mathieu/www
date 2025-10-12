<?php
// Validation et sécurisation de l'entrée
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id === false || $id === null) {
    die('ID invalide');
}

// Requête préparée correctement
$sqlQuery = 'SELECT P.*, I.Chemin FROM Perso P 
LEFT OUTER JOIN Image I ON P.N_Perso = I.N_Perso AND I.Statut = "Info"
WHERE P.N_Perso = :id';
$persoStatement = $db->prepare($sqlQuery);
$persoStatement->bindValue(':id', $id, PDO::PARAM_INT);
$persoStatement->execute();
$persos = $persoStatement->fetchAll(PDO::FETCH_ASSOC);

foreach ($persos as $perso) {
    // Échappement des données pour éviter XSS
    $surnom = htmlspecialchars($perso['Surnom'], ENT_QUOTES, 'UTF-8');
    $type = $perso['Type'];
    $sexe = $perso['Sexe'];
    $Taille = $perso['Taille'];
    $Poids = $perso['Poids'];
    $Sang = $perso['Groupe_Sanguin'];
    $EXP = $perso['Expérience'];
    $Spé = $perso['Spécialité'];
    $Age = $perso['Age'];
    $Prenom = $perso['Prenom'];
    $Nom = $perso['Nom'];
    $Chemin = $perso['Chemin'];
    $Naissance = $perso['Naissance'];
    $Organisation = $perso['Organisation'];
    $Orientation_sexuel = $perso['Attirance_Sexe'];
    // Page de Couverture
    echo '<div class="cover page cover-front">';

    // Utilisation d'un tableau pour simplifier la logique
    $titres = [
        'Heros_Homme' => "Dossier du Héros $surnom",
        'Heros_Femme' => "Dossier de l'Héroine $surnom",
        'Eleve' => "Dossier de l'Élève $surnom",
        'Clandestin_Homme' => "Dossier du Héros Clandestin $surnom",
        'Clandestin_Femme' => "Dossier de l'Héroine Clandestine $surnom"
    ];

    $cle = ($type === 'Eleve') ? 'Eleve' : "{$type}_{$sexe}";
    $titre = $titres[$cle] ?? "Dossier de $surnom";

    echo "<h1 id=\"Titre\">$titre</h1>";
    echo '<p id="classified">Classified</p></div>';

    // Première Page
    echo '<div class="page" id="page-1">
        <h2 id="Page_Header">Identité de l\'individu</h2>
            <div class="row">
                 <div class="col-6">
                     <p>Prénom : ' . $Prenom . '</p>
                     <p>Nom : ' . $Nom . '</p>
                     <p>Date de naissance : ' . $Naissance . '</p>
                     <p>Age : ' . $Age . ' ans</p>
                     <p>Taille : ' . $Taille . ' Cm</p>
                     <p>Poids : ' . $Poids . ' Kg</p>
                     <p>Groupe Sanguin : ' . $Sang . '</p>
                     <p>Sexe : ' . $sexe . '</p>
                     <p>Sexualité : ' . $Orientation_sexuel . '</p>
                     <p>Spécialité : ' . $Spé . '</p>
                 </div>
                <div class="col-6">
                    <img id="imgInfo" src="' . $Chemin . '" alt="' . $Prenom . ' ' . $Nom . '">
                    <p>Nom de code : ' . $surnom . '</p>
                    <p>Type : ' . $type . '</p>
                    <p>Agence / Organisation : ' . $Organisation . '</p>
                    <p>Expérience : ' . $EXP . ' ans</p>
                </div>
            </div>
          </div>';
}
// Requête préparée correctement
$sqlQuery = 'SELECT P.*, I.Chemin FROM Proche P
LEFT OUTER JOIN Image I ON P.N_Perso = I.N_Perso and P.Lien = I.Statut
WHERE P.N_Perso = :id';
$persoStatement = $db->prepare($sqlQuery);
$persoStatement->bindValue(':id', $id, PDO::PARAM_INT);
$persoStatement->execute();
$persos = $persoStatement->fetchAll(PDO::FETCH_ASSOC);

foreach ($persos as $perso) {
    // Échappement des données pour éviter XSS
    $Nom = htmlspecialchars($perso['Nom_Proche'], ENT_QUOTES, 'UTF-8');
    $Prenom = htmlspecialchars($perso['Prenom_Proche'], ENT_QUOTES, 'UTF-8');
    $sexe = $perso['Sexe'];
    $Statut_Proche = htmlspecialchars($perso['Statut_Proche'], ENT_QUOTES, 'UTF-8');
    $Pouvoir_Nom = htmlspecialchars($perso['Pouvoir_name_Proche'], ENT_QUOTES, 'UTF-8');
    $Pouvoir_Proche = htmlspecialchars($perso['Pouvoir_Proche'], ENT_QUOTES, 'UTF-8');
    $Histoire_Proche = htmlspecialchars($perso['Histoire_Proche'], ENT_QUOTES, 'UTF-8');
    $Lien = htmlspecialchars($perso['Lien'], ENT_QUOTES, 'UTF-8');
    $Age = $perso['Age_Proche'];
    $Date_Naissance = $perso['Naissance_Proche'];
    $Chemin = $perso['Chemin'];
    $Origine = $perso['Origine'];

    // Page du Proche
    echo '<div class="page" id="page-1">
        <h2 id="Page_Header">Identité du proche</h2>
            <div class="row">
                 <div class="col-6">
                     <p>Prénom : ' . $Prenom . '</p>
                     <p>Nom : ' . $Nom . '</p>
                     <p>Nom : ' . $Lien . '</p>
                     <p>Date de naissance : ' . $Date_Naissance . '</p>
                     <p>Age : ' . $Age . ' ans</p>
                     <p>Sexe : ' . $sexe . '</p>
                     <p>Statut : ' . $Statut_Proche . '</p>
                     <p>Origine : ' . $Origine . '</p>
                     <p>Alter Nom : ' . $Pouvoir_Nom . '</p>
                 </div>
                <div class="col-6">
                    <img id="imgInfo" src="' . $Chemin . '" alt="' . $Prenom . ' ' . $Nom . '">
                </div>
            </div>
          </div>';


     // Page du Proche Pouvoir
    echo '<div class="page" id="page-1">
        <h2 id="Page_Header">Pouvoir du proche : '.$Pouvoir_Nom.'</h2>
            <div class="row">
                 <div class="col-12" id = "Alter">
                    <p>' . $Pouvoir_Proche . '</p>
                </div>
            </div>
          </div>';

         // Page du Proche Histoire
    echo '<div class="page" id="page-1">
        <h2 id="Page_Header">Histoire du proche : '.$Prenom.'</h2>
            <div class="row">
                 <div class="col-12" id = "Story">
                    <p>' . $Histoire_Proche . '</p>
                </div>
            </div>
          </div>';
}
