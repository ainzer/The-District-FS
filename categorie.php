<?php
require_once 'Model/Managers/CategorieManager.php';

$categories = CategorieManager::getCategorieActive();

require_once 'Views/categorieView.php';