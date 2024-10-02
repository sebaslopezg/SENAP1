<?php
require_once 'models/aprendicesModel.php';

class Aprendices
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
                if (
                    isset($_POST['documentoAprendiz'])&&
                    isset($_POST['nombreAprendiz'])&&
                    isset($_POST['apellidoAprendiz'])&&
                    isset($_POST['generoAprendiz'])&&
                    isset($_POST['fechaNacimientoAprendiz'])&&
                    isset($_POST['telefonoAprendiz'])&&
                    isset($_POST['correoAprendiz'])) {
                        $this->aprendicesModel->agregarAprendiz(
                            strClean($_POST['documentoAprendiz']),
                            strClean($_POST['nombreAprendiz']),
                            strClean($_POST['apellidoAprendiz']),
                            strClean($_POST['generoAprendiz']),
                            strClean($_POST['fechaNacimientoAprendiz']),
                            strClean($_POST['telefonoAprendiz']),
                            strClean($_POST['correoAprendiz'])    
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
                            strClean($_POST['documentoAprendiz']),
                            strClean($_POST['nombreAprendiz']),
                            strClean($_POST['apellidoAprendiz']),
                            strClean($_POST['generoAprendiz']),
                            strClean($_POST['fechaNacimientoAprendiz']),
                            strClean($_POST['telefonoAprendiz']),
                            strClean($_POST['correoAprendiz'])
                        );
                }

            }
            header('Location: index.php?call=aprendices');
            exit();
        }
        $arrAprendices = $this->aprendicesModel->mostrarAprendices();
        require 'views/aprendicesView.php';
    }
}
