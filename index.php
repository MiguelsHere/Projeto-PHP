<?php
include_once 'controllers/controller.php';

$controller = new Controller();

$action = $_GET['action'] ?? 'homepage';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case "homepage":
    default:
        $controller->homepage();
        break;
}
