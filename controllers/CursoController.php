<?php
require_once 'models/CursoModel.php';
class CursoController
{
    private $cursoModel;

    public function __construct()
    {
        $this->cursoModel = new CursoModel();
    }

    public function listarCursos()
    {
        $cursos = $this->cursoModel->obtenerCursos();
        include './views/CursosView.php'; // Vista para mostrar comentarios
    }

    /* public function mostrarFormulario($id = null)
    {
        if ($id) {
            $curso = $this->cursoModel->obtenerCursoPorId($id);
            include '../views/EditarComentario.php';
        } else {
            include './views/CrearComentario.php';
        }
    } */

    public function manejarFormulario()
    {
        if (isset($_POST['action'])) {
            if ($_POST['action'] === 'agregar') {

                if (
                    isset($_POST['nombreCurso']) && !empty(trim($_POST['nombreCurso'])) &&
                    isset($_POST['descripcion']) && !empty(trim($_POST['descripcion']))
                ) {

                    $nombreCurso = $_POST['nombreCurso'];
                    $descripcion = $_POST['descripcion'];
                    $this->cursoModel->agregarCurso($nombreCurso, $descripcion);
                    // Redirige al listado de comentarios después de agregar
                    header('Location: index.php');
                    exit();
                }
            } elseif ($_POST['action'] === 'actualizar') {

                if (
                    isset($_POST['id']) && !empty(trim($_POST['id'])) &&
                    isset($_POST['nombreCurso']) && !empty(trim($_POST['nombreCurso'])) &&
                    isset($_POST['descripcion']) && !empty(trim($_POST['descripcion']))
                ) {

                    $id = $_POST['id'];
                    $nombreCurso = $_POST['nombreCurso'];
                    $descripcion = $_POST['descripcion'];
                    $this->cursoModel->actualizarCurso($id, $nombreCurso, $descripcion);
                    // Redirige al listado de comentarios después de actualizar
                    header('Location: index.php');
                    exit();
                }
            }
        }
    }
}
