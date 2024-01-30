<?php
require_once 'Model/Managers/CategorieManager.php';

$categories = CategorieManager::getCategoriePopulaire();

require_once 'Views/indexView.php';