<?php
require_once 'Model/Managers/DAO.php';

// Vérifier si les informations de commande sont transmises via l'URL
if (isset($_GET['plat_id'])) {
    $id = $_GET['plat_id'];
    $plat = PlatManager::getPlatById($id);
    // Inclure le fichier de vue de commande pour afficher la page
    require_once 'Views/commandeView.php';
} else {
    // Rediriger l'utilisateur vers une autre page ou afficher un message d'erreur si aucune information de commande n'est transmise
    echo "Aucune information de commande n'est spécifiée.";
}
