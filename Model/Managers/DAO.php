<?php
require_once 'Model/connexion.php';
require_once 'Model/Classes/Categorie.class.php';
require_once 'Model/Classes/Plat.class.php';

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
}

class PlatManager
{

    public static function getPlatsPlusVendus()
    {

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

    public static function getPlats()
    {

        $bdd = dbconnect();

        try {
            $query = "SELECT id, image, libelle, description, prix FROM plat LIMIT 6";

            $stmt = $bdd->prepare($query);
            $stmt->execute();

            $plats = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $plats;
        } catch (PDOException $e) {
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }

    public static function getPlatById($id)
    {

        $bdd = dbconnect();

        try {
            $query = "SELECT image, libelle, description, prix
            FROM plat
            WHERE id = :id";

            $stmt = $bdd->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $plat = $stmt->fetch(PDO::FETCH_ASSOC);

            return $plat;
        } catch (PDOException $e) {
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }

    public static function getPlatByIdCategorie($id)
    {

        $bdd = dbconnect();

        try {
            $query = "SELECT id, libelle, description, prix, image
            FROM plat
            WHERE id_categorie = :id";

            $stmt = $bdd->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $plat = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $plat;
        } catch (PDOException $e) {
            exit('Erreur lors de l\'exécution de la requête : ' . $e->getMessage());
        }
    }


    public static function getSearchByLibelle($libelle)
    {
        $bdd = dbconnect();

        try {
            $query = "SELECT id, libelle, description, prix, image
            FROM plat 
            WHERE libelle LIKE :query";

            $stmt = $bdd->prepare($query);
            $stmt->bindValue(':query', '%' . $query . '%', PDO::PARAM_STR);
            $stmt->execute();

            $plat = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $plat;
        } catch (PDOException $e) {
            exit('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }
}