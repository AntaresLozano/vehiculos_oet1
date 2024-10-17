<?php
require_once 'models/Vehicle.php';
require_once 'models/Driver.php';
require_once 'models/Owner.php';

$action = $_GET['subaction'] ?? 'list';

switch ($action) {
    case 'list':
        $vehicles = Vehicle::getAll();
        include 'views/vehicles/list.php';
        break;
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = Vehicle::add($_POST);
            if ($result) {
                redirect('index.php?action=vehicles&message=added');
            } else {
                $error = "Error al agregar el vehículo";
            }
        }
        // $drivers = Driver::getAll();
        include 'views/vehicles/add.php';
        break;
    case 'edit':
        $id = $_GET['id'] ?? null;
        if ($id) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $result = Vehicle::update($id, $_POST);
                if ($result) {
                    redirect('index.php?action=vehicles&message=updated');
                } else {
                    $error = "Error al actualizar el vehículo";
                }
            }
            $vehicle = Vehicle::getById($id);
            include 'views/vehicles/edit.php';
        } else {
            redirect('index.php?action=vehicles');
        }
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $result = Vehicle::delete($id);
            if ($result) {
                redirect('index.php?action=vehicles&message=deleted');
            } else {
                $error = "Error al eliminar el vehículo";
            }
        }
        redirect('index.php?action=vehicles');
        break;
    default:
        redirect('index.php?action=vehicles');
        break;
}
?>