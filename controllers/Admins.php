<?php 
require_once 'models/adminModel.php';
class Admins{

    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function getAdmins(){
        $admins = $this->cursoModel->mostrarAdmins();
        require_once 'views/adminsView.php';
    }
}