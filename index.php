<?php
require_once 'Model/Managers/DAO.php';

$categories = CategorieManager::getCategoriePopulaire();

require_once 'Views/indexView.php';