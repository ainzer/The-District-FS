<?php
// Inclure le fichier de connexion à la base de données
require_once('Model/connexion.php');

// Vérifier si la requête de recherche a été soumise
if (isset($_GET['query'])) {
    // Récupérer la requête de recherche depuis l'URL
    $query = $_GET['query'];

    try {
        // Connexion à la base de données
        $bdd = dbconnect();

        // Préparer la requête SQL pour rechercher dans votre base de données
        $statement = $bdd->prepare("SELECT * FROM plat WHERE libelle LIKE ?");
        $statement->execute(["%$query%"]);


        // Récupérer les résultats de la recherche
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Afficher les résultats (vous pouvez les afficher de la manière qui convient à votre application)
        foreach ($results as $result) {
            echo "<p>" . $result['libelle'] . "</p>";
        }
    } catch (PDOException $e) {
        // Gérer l'erreur de connexion de manière appropriée (journalisation, affichage d'un message d'erreur, etc.)
        exit('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
}
