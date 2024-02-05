<?php
// Inclusion de la fonction dbconnect depuis ton fichier contenant cette fonction
require_once('Model/connexion.php');

try {
    // Appelle la fonction dbconnect pour établir la connexion à la base de données
    $bdd = dbconnect();

    // Récupère la requête de recherche depuis le formulaire HTML
    $query = $_GET['query'];

    // Effectue la recherche dans la base de données
    $sql = "SELECT * FROM plat WHERE libelle LIKE :query";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':query', '%' . $query . '%', PDO::PARAM_STR);
    $stmt->execute();

    // Affiche les résultats de la recherche
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($result) > 0) {
        foreach ($result as $row) {
            echo "ID: " . $row["id"]. " - Libellé: " . $row["libelle"]. " - Prix: " . $row["prix"]. "<br>";
        }
    } else {
        echo "0 results found";
    }
} catch (PDOException $e) {
    // Gérer l'erreur de connexion de manière appropriée (journalisation, affichage d'un message d'erreur, etc.)
    exit('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>
