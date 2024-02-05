<?php
require_once 'Model/Managers/DAO.php';

if (isset($_GET['query'])) {
    $libelle = $_GET['query'];
    $plats = PlatManager::getSearchByLibelle($libelle);

    require_once 'Views/rechercheView.php';
} else {
    echo "0 results found for plat";
}