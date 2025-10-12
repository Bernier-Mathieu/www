<?php
// Validation et sécurisation de l'entrée
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id === false || $id === null) {
    die('ID invalide');
}

// Requête préparée correctement
$sqlQuery = 'SELECT P.Color, I.Chemin FROM Perso P 
LEFT OUTER JOIN Image I ON P.N_Perso = I.N_Perso AND I.Statut = "Fond"
WHERE P.N_Perso = :id';
$persoStatement = $db->prepare($sqlQuery);
$persoStatement->bindValue(':id', $id, PDO::PARAM_INT);
$persoStatement->execute();
$persos = $persoStatement->fetchAll(PDO::FETCH_ASSOC);

foreach ($persos as $perso) {
    // Échappement des données pour éviter XSS
    $Chemin = $perso['Chemin'];
    $Color = $perso['Color'];
    // Page de Couverture
    echo '<Style>
  body {
  background-image: url('.$Chemin.');
  background-color : '.$Color.';
  }
  </Style>';
}
?>