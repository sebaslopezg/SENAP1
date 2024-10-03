<?php
require_once 'models/AsignarModel.php';

class Asignar
{
    private $asignarModel;

    public function __construct()
    {
        $this->asignarModel = new AsignarModel();
    }

    public function mostrar()
    {
        $aprendices = $this->asignarModel->obtenerAprendices();
        $cursos = $this->asignarModel->obtenerCursos();
        //print_r($aprendices);
        //echo count($aprendices);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_GET['accion'] === 'asignarAprendices') {
                if (isset($_POST['arrayAprendices']) && isset($_POST['cursoSeleccionado'])) {
                    $seRepite = false;
                    $arrAprendices = $_POST['arrayAprendices'];
                    print_r($arrAprendices);
                    echo "<br><br>";
                    foreach ($arrAprendices as $elemento) {
                        foreach ($aprendices as $value) {
                            echo $value['id_aprendiz'] . " compara " . $elemento . "<br>";
                            if (intval($value['id_aprendiz']) == intval($elemento)) {
                                //echo $value['id_aprendiz'] . " es igual a " . $elemento;
                                $seRepite = true;
                            }
                        }
                    }

                    if (!$seRepite) {
                        //$this->agregarCursoAprendices($_POST['arrayAprendices'], $_POST['cursoSeleccionado']);
                    } else {
                        echo "se repite la monda";
                    }
                } else {
                    msg("Error", "error", "Faltan mas datos");
                }
            }

            if ($_GET['accion'] === 'asignarCursos') {
                if (isset($_POST['aprendizSeleccionado']) && isset($_POST['arrayCursos'])) {
                    $this->agregarAprendizCursos($_POST['aprendizSeleccionado'], $_POST['arrayCursos']);
                } else {
                    msg("Error", "error", "Faltan mas datos");
                }
            }
        }


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
