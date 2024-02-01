<?php
require_once 'Model/connexion.php';
require_once 'Model/Classes/Categorie.class.php';

class CategorieManager
{

    public static function getCategoriePopulaire()
    {

        $bdd = dbconnect();

        try {
            // Requête SQL pour sélectionner les catégories les plus populaires
            $query = "SELECT c.id, c.libelle, c.image, COUNT(co.id) AS total_commandes
            FROM categorie c
            LEFT JOIN plat p ON c.id = p.id_categorie AND c.active = 'Yes'
            LEFT JOIN commande co ON p.id = co.id_plat
            GROUP BY c.id
            ORDER BY total_commandes DESC
            LIMIT 6;"; // Vous pouvez ajuster le nombre de catégories que vous souhaitez afficher

            // Exécution de la requête
            $stmt = $bdd->prepare($query);
            $stmt->execute();

            // Récupération des résultats
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Retourner les catégories les plus populaires
            return $categories;
        } catch (PDOException $e) {
            // Gérer l'erreur de requête de manière appropriée (journalisation, affichage d'un message d'erreur, etc.)
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }

    public static function getCategorieActive()
    {

        $bdd = dbconnect();

        try {
            // Requête SQL pour sélectionner les catégories actives limitées à 6 résultats
            $query = "SELECT c.id, c.libelle, c.image
            FROM categorie c
            WHERE c.active = 'Yes'
            LIMIT 6";

            // Exécution de la requête
            $stmt = $bdd->prepare($query);
            $stmt->execute();

            // Récupération des résultats
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Retourner les catégories les plus populaires
            return $categories;
        } catch (PDOException $e) {
            // Gérer l'erreur de requête de manière appropriée (journalisation, affichage d'un message d'erreur, etc.)
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }

    /*public static function getPlatByIdCategorie($id)
    {

        $bdd = dbconnect();

        try {
            $query = "SELECT id, libelle, description, prix, image
            FROM plat
            WHERE id_categorie = :id";

            $stmt = $bdd->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $categories;
        } catch (PDOException $e) {
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }*/
}
