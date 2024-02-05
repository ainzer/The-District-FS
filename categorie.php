<?php
require_once 'Model/Managers/DAO.php';

$categories = CategorieManager::getCategorieActive();

require_once 'Views/categorieView.php';