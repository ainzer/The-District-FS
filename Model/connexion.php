<?php

function dbconnect() {

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=TheDistrict','admin','Afpa1234');
        return $pdo;
    } catch (PDOException $e) {
        die("La connexion à la base de données a échoué : " . $e->getMessage());
    }
}