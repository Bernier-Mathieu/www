<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=incroyjeux;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Lire les données JSON brutes
$input = json_decode(file_get_contents('php://input'), true);

$score = $input['score'] ?? null;
$user  = $input['pseudo'] ?? null;
$game  = $input['Game'] ?? null;


if ($score !== null && $user !== null && $game !== null) {
    $stmt = $bdd->prepare("CALL Insert_Score(?, ?, ?)");
    $stmt->execute([$score, $user, $game]);
    echo "Score enregistré.";
} else {
    http_response_code(400);
    echo "Paramètres manquants.";
}
