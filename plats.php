<?php
require_once 'Model/Managers/PlatManager.php';

$plats = PlatManager::getPlats();

require_once 'Views/platsView.php';