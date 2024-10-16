<?php
require_once 'models/Driver.php';

$action = $_GET['subaction'] ?? 'list';

switch ($action) {
    case 'list':
        $drivers = Driver::getAll();
        include 'views/drivers/list.php';
        break;
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = Driver::add($_POST);
            if ($result) {
                redirect('index.php?action=drivers&message=added');
            } else {
                $error = "Error al agregar el conductor";
            }
        }
        include 'views/drivers/add.php';
        break;
    case 'edit':
        $id = $_GET['id'] ?? null;
        if ($id) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $result = Driver::update($id, $_POST);
                if ($result) {
                    redirect('index.php?action=drivers&message=updated');
                } else {
                    $error = "Error al actualizar el conductor";
                }
            }
            $driver = Driver::getById($id);
            include 'views/drivers/edit.php';
        } else {
            redirect('index.php?action=drivers');
        }
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $result = Driver::delete($id);
            if ($result) {
                redirect('index.php?action=drivers&message=deleted');
            } else {
                $error = "Error al eliminar el conductor";
            }
        }
        redirect('index.php?action=drivers');
        break;
    default:
        redirect('index.php?action=drivers');
        break;
}
?>