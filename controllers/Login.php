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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $respuesta = $this->loginModel->obtenerUsuario(
                strClean($_POST['usuario']),
                md5(strClean($_POST['pass'])),
            );

            if (count($respuesta) > 0) {
                $this->inicioSesion = true;
                $this->usuario->setNombre($respuesta['nombre_Adm']);
                $_SESSION['login'] = true;
                $_SESSION['usuario'] = $this->usuario;
                header('Location: index.php?call=home');
            } else {
                header('Location: index.php?call=login');
            }

            exit();
        } else {
            require_once 'views/loginView.php';
        }
    }
}
