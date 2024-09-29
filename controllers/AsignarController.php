<?php
require_once 'models/AsignarModel.php';

class AsignarController
{
    private $asignarModel;

    public function __construct()
    {
        $this->asignarModel = new AsignarModel();
    }

    public function mostrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_GET['accion'] === 'asignarAprendices') {
                if (isset($_POST['arrayAprendices']) && isset($_POST['cursoSeleccionado'])) {
                    $this->agregarCursoAprendices($_POST['arrayAprendices'], $_POST['cursoSeleccionado']);
                } else {
                    echo "Faltan datos en el formulario.";
                }  
            }
    
            if ($_GET['accion'] === 'asignarCursos') {
                if (isset($_POST['aprendizSeleccionado']) && isset($_POST['arrayCursos'])) {
                    $this->agregarAprendizCursos($_POST['aprendizSeleccionado'], $_POST['arrayCursos']);
                } else {
                    echo "Faltan datos en el formulario.";
                }
            }
        }

        $aprendices = $this->asignarModel->obtenerAprendices();
        $cursos = $this->asignarModel->obtenerCursos();
        $asignaciones = $this->asignarModel->mostrarAsignaciones();
        include 'views/AsignarView.php';
    }

    public function agregarCursoAprendices($arrayNumDoc, $idCurso)
    {
        for ($i = 0; $i < sizeof($arrayNumDoc); $i++) {
            $this->asignarModel->agregarAsignacion($arrayNumDoc[$i], $idCurso);
        }
        header('Location: index.php?call=asignaciones');
        exit();
    }

    public function agregarAprendizCursos($numDoc, $arrayIdCursos)
    {
        for ($i = 0; $i < sizeof($arrayIdCursos); $i++) {
            $this->asignarModel->agregarAsignacion($numDoc, $arrayIdCursos[$i]);
        }
        header('Location: index.php?call=asignaciones');
        exit();
    }
}
