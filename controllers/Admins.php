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

            if ($_GET['accion'] === 'guardar') {
                $arrPost = ['usuario','password', 'correo', 'nombre', 'apellido'];
                if (check_post($arrPost)) {
                    $this->adminModel->agregarAdmin(
                        strClean($_POST['usuario']),
                        md5(strClean($_POST['password'])),
                        strClean($_POST['correo']),
                        strClean($_POST['nombre']),
                        strClean($_POST['apellido']),
                    ); 
                    echo msg_redirect("Correcto","success", "Administrador agregado correctamente","index.php?call=admins");
                }else{
                    echo msg_redirect("Error en formulario","error", "No se pudo actualizar el administrador","index.php?call=admins");
                }
                
            }
            //codigo incompleto
            if ($_GET['accion'] === 'editar') {
                $arrPost = ['usuario', 'correo', 'nombre', 'apellido'];
                if (check_post($arrPost)) {
                    $this->adminModel->actualizarAdmin(
                        strClean($_POST['usuario']),
                        strClean($_POST['correo']),
                        strClean($_POST['nombre']),
                        strClean($_POST['apellido']),
                        strClean($_POST['id'])
                    );
                    echo msg_redirect("Correcto","success", "Administrador actualizado correctamente","index.php?call=admins");
                }else{
                    echo msg_redirect("Error en formulario","error", "No se pudo actualizar el administrador","index.php?call=admins");
                }
            }
        }
        
        $admins = $this->adminModel->mostrarAdmins();
        require_once 'views/adminsView.php';
        
        
    }
}
