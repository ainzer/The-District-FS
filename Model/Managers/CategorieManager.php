<?php
require_once 'Model/connexion.php';
require_once 'Model/Classes/Categorie.class.php';

class CategorieManager {

    public static function getCategoriePopulaire() {

        $bdd = dbconnect();
        $query = "SELECT c.id, c.libelle, c.image, COUNT(co.id) AS total_commandes
        FROM categorie c
        LEFT JOIN plat p ON c.id = p.id_categorie
        LEFT JOIN commande co ON p.id = co.id_plat
        GROUP BY c.id
        ORDER BY total_commandes DESC
        LIMIT 6";

    }
}