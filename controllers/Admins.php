<?php 
require_once 'models/adminsModel.php';
class Admins{

    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminsModel();
    }

    public function getAdmins(){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_GET['accion'] === 'guardar') {
                $this->adminModel->agregarAdmin(
                    filter_var($_POST['usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['correo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['apellido'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                );
            }
            //codigo incompleto
            if ($_GET['accion'] === 'editar') {
                $this->adminModel->actualizarAdmin(
                    filter_var($_POST['usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['correo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['apellido'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    filter_var($_POST['id'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)
                );
            }
            header('Location: index.php?call=admins');
            exit();
        }

        $admins = $this->adminModel->mostrarAdmins();
        require_once 'views/adminsView.php';
    }
}