<?php
// Inclusion du fichier de configuration pour établir la connexion à la base de données
require './config.php';

try {
    // Exécution de la requête SQL pour récupérer les 10 premiers films (id et title)
    $requete = $bdd->query("SELECT id, title FROM movie LIMIT 10");

    // Récupère tous les résultats sous forme de tableau associatif
    $movies = $requete->fetchAll(PDO::FETCH_ASSOC);

    // Définit l'en-tête HTTP pour indiquer que la réponse est en JSON
    header('Content-Type: application/json');

    // Convertit le tableau associatif en JSON et l'envoie en réponse
    echo json_encode($movies);
} catch (Exception $e) {
    // En cas d'erreur, retourne un message JSON indiquant le problème
    echo json_encode(["error" => "Erreur lors de la récupération des données"]);
}
?>
