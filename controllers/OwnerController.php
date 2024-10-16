<?php
require_once 'models/Owner.php';

$action = $_GET['subaction'] ?? 'list';

switch ($action) {
    case 'list':
        $owners = Owner::getAll();
        include 'views/owners/list.php';
        break;
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $result = Owner::add($_POST);
            if ($result) {
                redirect('index.php?action=owners&message=added');
            } else {
                $error = "Error al agregar el propietario";
            }
        }
        include 'views/owners/add.php';
        break;
    case 'edit':
        $id = $_GET['id'] ?? null;
        if ($id) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $result = Owner::update($id, $_POST);
                if ($result) {
                    redirect('index.php?action=owners&message=updated');
                } else {
                    $error = "Error al actualizar el propietario";
                }
            }
            $owner = Owner::getById($id);
            include 'views/owners/edit.php';
        } else {
            redirect('index.php?action=owners');
        }
        break;
    case 'delete':
        $id = $_GET['id'] ?? null;
        if ($id) {
            $result = Owner::delete($id);
            if ($result) {
                redirect('index.php?action=owners&message=deleted');
            } else {
                $error = "Error al eliminar el propietario";
            }
        }
        redirect('index.php?action=owners');
        break;
    default:
        redirect('index.php?action=owners');
        break;
}
?>