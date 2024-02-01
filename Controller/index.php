<?php
require_once 'Model/Managers/CategorieManager.php';
require_once 'Model/Managers/PlatManager.php';

$categories = CategorieManager::getCategoriePopulaire();

require_once 'Views/indexView.php';