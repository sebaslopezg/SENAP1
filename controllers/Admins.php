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
                    //filter_var($_POST[''], FILTER_SANITIZE_FULL_SPECIAL_CHARS)
                );
            }
            if ($_GET['accion'] === 'editar') {
                $this->aprendicesModel->actualizarAdmin(
                    //filter_var($_POST[''], FILTER_SANITIZE_FULL_SPECIAL_CHARS)
                );
            }
            header('Location: index.php?call=aprendices');
            exit();
        }

        $admins = $this->adminModel->mostrarAdmins();
        require_once 'views/adminsView.php';
    }
}