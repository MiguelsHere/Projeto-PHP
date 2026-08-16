<?php
session_start();

include_once 'controllers/ProfileController.php';

$controller = new ProfileController();

$action = $_GET['action'] ?? 'home';

switch ($action) {

    case "profile_index":
        $controller->profile_index();
        break;
    case "password":
        $controller->password_reset();
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
