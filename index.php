<?php
require_once 'config.php';
require_once 'functions.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {
    case 'home':
        include 'views/home.php';
        break;
    case 'vehicles':
        include 'controllers/VehicleController.php';
        break;
    case 'drivers':
        include 'controllers/DriverController.php';
        break;
    case 'owners':
        include 'controllers/OwnerController.php';
        break;
    case 'reports':
        include 'controllers/ReportController.php';
        break;
    case 'export':
        include 'controllers/ReportController.php';
        break;
    default:
        include 'views/404.php';
        break;
}
?>