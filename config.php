<?php 

// Active l'affichage des erreurs pour faciliter le debug
error_reporting(E_ALL); // Affiche toutes les erreurs et avertissements PHP
ini_set("display_errors", 1); // Force l'affichage des erreurs dans le navigateur

try 
{
    // Connexion à la base de données avec PDO (MySQL, utilisateur et mot de passe fournis)
    $bdd = new PDO("mysql:host=localhost;dbname=cinema;charset=utf8", $user, $pass);

    // Active le mode d'erreur pour lever des exceptions en cas de problème SQL
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    // En cas d'erreur de connexion, on arrête l'exécution et on affiche un message d'erreur détaillé
    die('Erreur : '.$e->getMessage());
}
