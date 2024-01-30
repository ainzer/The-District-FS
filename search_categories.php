<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Récupérer la valeur de l'input depuis la requête GET
$input = $_GET['input'];

// Échapper les caractères spéciaux pour éviter les injections SQL
$input = $conn->real_escape_string($input);

// Requête SQL pour récupérer les catégories correspondant à la recherche
$sql = "SELECT id_categorie, libelle, image, active FROM categories WHERE libelle LIKE '%$input%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Créer un tableau pour stocker les données des catégories
    $categories = array();

    // Récupérer chaque ligne de résultats comme un tableau associatif
    while ($row = $result->fetch_assoc()) {
        // Ajouter les données de la catégorie au tableau
        $categories[] = $row;
    }

    // Convertir le tableau en format JSON et le renvoyer
    echo json_encode($categories);
} else {
    // Aucune catégorie correspondante trouvée
    echo json_encode(array());
}

// Fermer la connexion à la base de données
$conn->close();
?>
