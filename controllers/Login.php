<?php
require_once 'models/LoginModel.php';

class Login
{
    private $loginModel;
    public $inicioSesion;
    private $usuario;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->usuario = new UsuarioSesion();
        $this->inicioSesion;
        
    }

    public function getLogin()
    {
        require_once 'views/loginView.php';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuesta = $this->loginModel->obtenerUsuario(
                strClean($_POST['usuario']),
                md5(strClean($_POST['pass'])),
            );

            if (!empty($respuesta)) {
                session_start();
                $this->inicioSesion = true;
                $this->usuario->setNombre($respuesta['nombre_Adm']);
                $_SESSION['login'] = true;
                $_SESSION['usuario'] = $this->usuario;
                header('Location: index.php?call=home');
            } else {
                echo msg_redirect("Error", "error", "Usuario o contraseña no valido", "index.php?call=login");
            }

            //exit();
        } else {
            
        }
    }

    public function checkLogin(){

    }
}
