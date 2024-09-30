<?php 
require_once 'models/adminsModel.php';
class Admins{

    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminsModel();
    }

    public function getAdmins(){
        $admins = $this->adminModel->mostrarAdmins();
        require_once 'views/adminsView.php';
    }
}