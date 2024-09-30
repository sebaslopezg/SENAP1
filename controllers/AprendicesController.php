<?php
require_once 'models/aprendicesModel.php';

class AprendicesController
{

    public function __construct()
    {
        $this->aprendicesModel = new AprendicesModel();
    }

    function aprendices()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_GET['accion'] === 'guardar') {
                if (
                    isset($_POST['documentoAprendiz'])&&
                    isset($_POST['nombreAprendiz'])&&
                    isset($_POST['apellidoAprendiz'])&&
                    isset($_POST['generoAprendiz'])&&
                    isset($_POST['fechaNacimientoAprendiz'])&&
                    isset($_POST['telefonoAprendiz'])&&
                    isset($_POST['correoAprendiz'])) {
                        $this->aprendicesModel->agregarAprendiz(
                            filter_var($_POST['documentoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['nombreAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['apellidoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['generoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['fechaNacimientoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['telefonoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['correoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)    
                        );
                }

            }
            if ($_GET['accion'] === 'editar') {
                if (
                    isset($_POST['documentoAprendiz'])&&
                    isset($_POST['nombreAprendiz'])&&
                    isset($_POST['apellidoAprendiz'])&&
                    isset($_POST['generoAprendiz'])&&
                    isset($_POST['fechaNacimientoAprendiz'])&&
                    isset($_POST['telefonoAprendiz'])&&
                    isset($_POST['correoAprendiz'])) {
                        $this->aprendicesModel->actualizarAprendiz(
                            filter_var($_POST['documentoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['nombreAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['apellidoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['generoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['fechaNacimientoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['telefonoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                            filter_var($_POST['correoAprendiz'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)
                        );
                }

            }
            header('Location: index.php?call=aprendices');
            exit();
        }

        $arrAprendices = $this->aprendicesModel->mostrarAprendices();
        require 'views/aprendicesView.php';
        //print_r($arrAprendices);
    }
}
