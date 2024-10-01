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
                md5(filter_var($_POST['pass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)),
            );

            print_r($respuesta);
            if (count($respuesta) > 0) {
                setLoginStatus(true);
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
