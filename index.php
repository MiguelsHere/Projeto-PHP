<?php
include_once 'controllers/controller.php';

$controller = new Controller();

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case "profile_index":
        $controller->profile_index();
        break;
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
