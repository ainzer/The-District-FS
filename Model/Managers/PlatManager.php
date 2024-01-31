<?php
require_once 'Model/connexion.php';
require_once 'Model/Classes/Plat.class.php';

class PlatManager {

    public static function getPlatsPlusVendus() {

        $bdd = dbconnect();

        try {
            // Requête SQL pour sélectionner les plats les plus vendus
            $query = "SELECT plat.id, plat.libelle, plat.description, plat.image, COUNT(commande.id_plat) AS total_ventes
            FROM plat
            LEFT JOIN commande ON plat.id = commande.id_plat
            GROUP BY plat.id
            ORDER BY total_ventes DESC
            LIMIT 3"; // Vous pouvez ajuster le nombre de plats que vous souhaitez afficher

            // Exécution de la requête
            $stmt = $bdd->prepare($query);
            $stmt->execute();

            // Récupération des résultats
            $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Retourner les plats les plus vendus
            return $plats;
        } catch (PDOException $e) {
            // Gérer l'erreur de requête de manière appropriée (journalisation, affichage d'un message d'erreur, etc.)
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }

    public static function getPlats() {

        $bdd = dbconnect();

        try {
            $query = "SELECT image,libelle, description, prix FROM plat LIMIT 6";

            $stmt = $bdd->prepare($query);
            $stmt->execute();

            $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $plats;
        } catch (PDOException $e) {
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }
}
?>
