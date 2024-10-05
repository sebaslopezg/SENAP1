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
        $arrAprendices = $this->aprendicesModel->mostrarAprendices();
        require 'views/aprendicesView.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_GET['accion'] === 'guardar') {
                $arrPost = [
                    'documentoAprendiz',
                    'nombreAprendiz',
                    'apellidoAprendiz',
                    'generoAprendiz',
                    'fechaNacimientoAprendiz',
                    'telefonoAprendiz',
                    'correoAprendiz'
                ];
                if (check_post($arrPost)) {
                    $this->aprendicesModel->agregarAprendiz(
                        strClean($_POST['documentoAprendiz']),
                        strClean($_POST['nombreAprendiz']),
                        strClean($_POST['apellidoAprendiz']),
                        strClean($_POST['generoAprendiz']),
                        strClean($_POST['fechaNacimientoAprendiz']),
                        strClean($_POST['telefonoAprendiz']),
                        strClean($_POST['correoAprendiz'])
                    );
                    msg("Guardar", "succses", "Aprendiz guardado Exitosamente");
                } else {
                    msg("Error", "error", "Error al guardar aprendiz");
                }
            }
            if ($_GET['accion'] === 'editar') {
                if (check_post($arrPost)) {
                    $this->aprendicesModel->actualizarAprendiz(
                        strClean($_POST['documentoAprendiz']),
                        strClean($_POST['nombreAprendiz']),
                        strClean($_POST['apellidoAprendiz']),
                        strClean($_POST['generoAprendiz']),
                        strClean($_POST['fechaNacimientoAprendiz']),
                        strClean($_POST['telefonoAprendiz']),
                        strClean($_POST['correoAprendiz'])
                    );
                    msg("Guardar", "succses", "Aprendiz editado Exitosamente");
                } else {
                    msg("Error", "error", "Error al editar aprendiz");
                }
            }
        }
    }
}
