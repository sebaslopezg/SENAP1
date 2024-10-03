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
        $asignados = $this->asignarModel->obtenerAsignados();
        $cursosAsignados = $this->asignarModel->obtenerCursosAsignados();
        $cursos = $this->asignarModel->obtenerCursos();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if ($_GET['accion'] === 'asignarAprendices') {
                if (isset($_POST['arrayAprendices']) && isset($_POST['cursoSeleccionado'])) {
                    
                    $seRepite = false;
                    $arrAprendices = $_POST['arrayAprendices'];

                    foreach ($arrAprendices as $llave => $valor) {

                        foreach ($asignados as $key => $value) {

                            if ($asignados[$key]['id_aprendiz'] == $arrAprendices[$llave]) {
                                $seRepite = true;
                            }
                        }
                    }

                    if (!$seRepite) {
                        $this->agregarCursoAprendices($_POST['arrayAprendices'], $_POST['cursoSeleccionado']);
                    } else {
                        echo msg("Error", "error", "uno o varios aprendices ya tienen un curso asignado");
                    }
                } else {
                    echo msg("Error", "error", "Faltan mas datos");
                }
            }

            if ($_GET['accion'] === 'asignarCursos') {
                if (isset($_POST['aprendizSeleccionado']) && isset($_POST['arrayCursos'])) {
                    $seRepite = false;
                    $arrCursos = $_POST['arrayCursos'];

                    foreach ($arrCursos as $llave => $valor) {

                        foreach ($cursosAsignados as $key => $value) {
                            if ($cursosAsignados[$key]['id_Cur'] == $arrCursos[$llave]) {
                                
                                $seRepite = true;
                            }
                        }
                    }

                    if (!$seRepite) {
                        $this->agregarAprendizCursos($_POST['aprendizSeleccionado'], $_POST['arrayCursos']);
                    } else {
                        echo msg("Error", "error", "uno o varios aprendices ya tienen un curso asignado");
                    }
                } else {
                    echo msg("Error", "error", "Faltan mas datos");
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
        echo msg("Completado", "success", "El aprendiz ha sido asignado correctamente");
        //header('Location: index.php?call=asignaciones');
        //exit();
    }

    public function agregarAprendizCursos($numDoc, $arrayIdCursos)
    {
        for ($i = 0; $i < sizeof($arrayIdCursos); $i++) {
            $this->asignarModel->agregarAsignacion($numDoc, $arrayIdCursos[$i]);
            echo msg("Completado", "success", "El aprendiz ha sido asignado correctamente");
        }
        //header('Location: index.php?call=asignaciones');
        //exit();
    }
}
