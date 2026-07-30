<?php
include_once 'controllers/controller.php';

$controller = new Controller();

$action = $_GET['action'] ?? 'homepage';

switch ($action) {
    case "login":
        $controller->login();
        break;
    case "register":
        $controller->register();
        break;
    case "home":
    default:
        $controller->home();
        break;
}
