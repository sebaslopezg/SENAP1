<?php
require_once 'models/LoginModel.php';
class Login
{
    private $loginModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
    }

    public function getLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        

            $respuesta = $this->loginModel->comparar(
                filter_var($_POST['usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                md5(filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)),
            );

            
            if (count($respuesta) > 0) {
                $login = true;
                header('Location: index.php?call=home');
            }

            header('Location: index.php?call=login');
            exit();
        }
        require_once 'views/loginView.php';
    }
}
