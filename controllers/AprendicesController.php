<?php
require_once 'models/aprendicesModel.php';

class AprendicesController
{

    private $aprendicesModel;

    public function __construct()
    {
        $this->aprendicesModel = new AprendicesModel();
    }

    function aprendices()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_GET['accion'] === 'guardar') {
                $this->aprendicesModel->agregarAprendiz(
                    $_POST['documentoAprendiz'],
                    $_POST['nombreAprendiz'],
                    $_POST['apellidoAprendiz'],
                    $_POST['generoAprendiz'],
                    $_POST['fechaNacimientoAprendiz'],
                    $_POST['telefonoAprendiz'],
                    $_POST['correoAprendiz']
                );
            }
            if ($_GET['accion'] === 'editar') {
                $this->aprendicesModel->actualizarAprendiz(
                    $_POST['documentoAprendiz'],
                    $_POST['nombreAprendiz'],
                    $_POST['apellidoAprendiz'],
                    $_POST['generoAprendiz'],
                    $_POST['fechaNacimientoAprendiz'],
                    $_POST['telefonoAprendiz'],
                    $_POST['correoAprendiz']
                );
            }
            header('Location: index.php?call=aprendices');
            exit();
        }

        $arrAprendices = $this->aprendicesModel->mostrarAprendices();
        require 'views/aprendicesView.php';
        //print_r($arrAprendices);
    }

    function guardarAprendices()
    {
        echo "de debe GUARDAR AAAA";
    }

    function cursos()
    {
        require 'views/CursosView.php';
    }
}
