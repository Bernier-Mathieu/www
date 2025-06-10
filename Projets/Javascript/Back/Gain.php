<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=incroyjeux;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!isset($_POST['score'], $_POST['user'], $_POST['Game'])) {
        http_response_code(400);
        echo "Paramètres manquants.";
        exit;
    }

    $score = (int) $_POST['score'];
    $user  = $_POST['user'];
    $game  = (int) $_POST['Game'];

    $stmt = $bdd->prepare("CALL Insert_Score(?, ?, ?)");
    $stmt->execute([$score, $user, $game]);

    echo "Score enregistré avec succès.";
} catch (PDOException $e) {
    http_response_code(500);
    echo "Erreur serveur : " . $e->getMessage();
}
