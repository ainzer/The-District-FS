<?php

function dbconnect() {
    // Connexion à la base de données
    $host = 'localhost'; // Changer au besoin
    $dbname = 'TheDistrict'; // Changer au besoin
    $user = 'admin'; // Changer au besoin
    $password = 'Afpa1234'; // Changer au besoin

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        // Gestion des erreurs PDO
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch (PDOException $e) {
        // Gérer l'erreur de connexion de manière appropriée (journalisation, affichage d'un message d'erreur, etc.)
        exit('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
}