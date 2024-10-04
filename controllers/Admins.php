<?php
require_once 'models/adminsModel.php';
//TODO: Terminar de revisar validaciones del formulario
class Admins
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminsModel();
    }

    public function getAdmins()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $arrPost = ['usuario','password', 'correo', 'nombre', 'apellido'];

            if ($_GET['accion'] === 'guardar') {
                if (check_post($arrPost)) {
                    $this->adminModel->agregarAdmin(
                        strClean($_POST['usuario']),
                        md5(strClean($_POST['password'])),
                        strClean($_POST['correo']),
                        strClean($_POST['nombre']),
                        strClean($_POST['apellido']),
                    ); 
                }
            }
            //codigo incompleto
            if ($_GET['accion'] === 'editar') {
                $this->adminModel->actualizarAdmin(
                    strClean($_POST['usuario']),
                    strClean($_POST['password']),
                    strClean($_POST['correo']),
                    strClean($_POST['nombre']),
                    strClean($_POST['apellido']),
                    strClean($_POST['id'])
                );
            }
           echo msg_redirect("Correcto!","success", "Administrador agregado correctamente","index.php?call=admins");
        }
        
        $admins = $this->adminModel->mostrarAdmins();
        require_once 'views/adminsView.php';
        
        
    }
}
