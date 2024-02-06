<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = ($_POST["nom"]);
    $prenom = ($_POST["prenom"]);
    $email = ($_POST["email"]);
    $adresse = ($_POST["adresse"]);
    $quantite = ($_POST["quantite"]);

}