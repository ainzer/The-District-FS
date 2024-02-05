<?php
require_once 'Model/Managers/DAO.php';

$plats = PlatManager::getPlats();

require_once 'Views/platsView.php';