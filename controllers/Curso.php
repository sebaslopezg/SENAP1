<?php
require_once 'models/CursoModel.php';

class Curso
{
    private $cursoModel;

    public function __construct()
    {
        $this->cursoModel = new CursoModel();
    }

    public function listarCursos()
    {
        $cursos = $this->cursoModel->obtenerCursos();
        include 'views/CursosView.php';
    }

    public function manejarFormulario()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_GET['accion'] === 'agregar') {
                if (
                    isset($_POST['nombreCurso']) && !empty(trim($_POST['nombreCurso'])) &&
                    isset($_POST['descripcion']) && !empty(trim($_POST['descripcion']))
                ) {
                    $nombreCurso =  strClean($_POST['nombreCurso']);
                    $descripcion = strClean($_POST['descripcion']);

                    $validarNombre = $this->cursoModel->validarNombreCurso($nombreCurso);

                    if (mysqli_num_rows($validarNombre) > 0) {
                        echo msg_redirect("¡Error!", "error", "Curso ya existente.", "index.php?call=cursos");
                    } else {
                        $this->cursoModel->agregarCurso($nombreCurso, $descripcion);
                        echo msg_redirect("¡Completado!", "success", "Curso agregado exitosamente.", "index.php?call=cursos");
                    }
                } else {
                    echo msg_redirect("¡Atencion!", "warning", "Llene todos los campos.", "index.php?call=cursos");
                }
            } elseif ($_GET['accion'] === 'actualizar') {
                if (
                    isset($_POST['id']) && !empty(trim($_POST['id'])) &&
                    isset($_POST['descripcion']) && !empty(trim($_POST['descripcion']))
                ) {
                    $id = $_POST['id'];
                    $descripcion = strClean($_POST['descripcion']);
                    $this->cursoModel->actualizarCurso($id, $descripcion);
                    echo msg_redirect("¡Completado!", "success", "Curso actualizado exitosamente.", "index.php?call=cursos");
                } else {
                    echo msg_redirect("¡Atencion!", "warning", "Faltan datos del formulario para actualizar.", "index.php?call=cursos");
                }
            } elseif ($_GET['accion'] === 'eliminar') {
                if (
                    isset($_POST['id']) && !empty(trim($_POST['id'])) &&
                    isset($_POST['nombreCurso']) && !empty(trim($_POST['nombreCurso']))
                ) {
                    $id = $_POST['id'];
                    $nombreCurso = $_POST['nombreCurso'];
                    $this->cursoModel->eliminarCurso($id);
                    echo msg_redirect("¡Completado!", "success", "Curso " . $nombreCurso .  "  eliminado correctamente.", "index.php?call=cursos");
                } else {
                    echo "No exiaten las variables";
                }
            }
        }
        $cursos = $this->cursoModel->obtenerCursos();
        include 'views/CursosView.php';
    }
}
