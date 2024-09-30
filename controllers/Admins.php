<?php 
require_once 'models/adminModel.php';
class Admins{

    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function listarAdmins()
    {
        $admins = $this->cursoModel->obtenerCursos();
        include 'views/CursosView.php'; // Vista para mostrar comentarios
    }

    public function getAdmins(){
        require_once 'views/adminsView.php';
    }
}