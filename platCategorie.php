<?php
require_once 'Model/Managers/PlatManager.php';

if (isset($_GET['categorie_id'])) {
    $id = $_GET['categorie_id'];
    $plats = PlatManager::getPlatByIdCategorie($id);

    require_once 'Views/platCategorieView.php';
} else {
    echo "Aucune information de plat n'est spécifiée.";
}