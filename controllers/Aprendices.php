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
                    echo msg_redirect("Guardar", "success", "Aprendiz guardado Exitosamente", "index.php?call=aprendices");
                } else {
                    echo msg_redirect("Error", "error", "Error al guardar aprendiz", "index.php?call=aprendices");
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
                    echo msg_redirect("Guardar", "success", "Aprendiz editado Exitosamente", "index.php?call=aprendices");
                } else {
                    echo msg_redirect("Error", "error", "Error al editar aprendiz", "index.php?call=aprendices");
                }
            }
            if ($_GET['accion'] === 'eliminar') {
                $idAprendiz = $_GET['id'];

                if (!empty($idAprendiz)) {
                    if (intval($idAprendiz) > 0) {
                        $this->aprendicesModel->eliminarAprendiz($idAprendiz);
                        echo msg_redirect("Eliminar", "success", "Aprendiz eliminado Exitosamente", "index.php?call=aprendices");
                    } else {
                        echo msg_redirect("Eliminar", "error", "Error al eliminar aprendiz", "index.php?call=aprendices");
                    }  
                }else{
                    echo msg_redirect("Eliminar", "error", "ID vacío", "index.php?call=aprendices");
                }
            }
        }
    }
}
