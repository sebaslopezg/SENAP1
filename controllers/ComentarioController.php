<?php
require_once 'models/ComentarioModel.php';
class ComentarioController
{
    private $comentarioModel;

    public function __construct()
    {
        $this->comentarioModel = new ComentarioModel();
    }

    public function listarComentarios()
    {
        $comentarios = $this->comentarioModel->obtenerComentarios();
        include '../views/listar_comentarios.php'; // Vista para mostrar comentarios
    }

    public function mostrarFormulario($id = null)
    {
        if ($id) {
            $comentario = $this->comentarioModel->obtenerComentarioPorId($id);
            include '../views/EditarComentario.php';
        } else {
            include './views/CrearComentario.php';
        }
    }

    public function manejarFormulario()
    {
        if (isset($_POST['action'])) {

            if ($_POST['action'] === 'agregar') {
                $autor = $_POST['autor'];
                $contenido = $_POST['contenido'];
                $this->comentarioModel->agregarComentario($autor, $contenido);
                // Redirige al listado de comentarios después de agregar
                header('Location: index.php');
                exit();
            } elseif ($_POST['action'] === 'actualizar') {
                $id = $_POST['id'];
                $autor = $_POST['autor'];
                $contenido = $_POST['contenido'];
                $this->comentarioModel->actualizarComentario($id, $autor, $contenido);
                // Redirige al listado de comentarios después de actualizar
                header('Location: index.php');
                exit();
            }
        }
    }

    public function eliminarComentario($id)
    {
        $this->comentarioModel->eliminarComentario($id);
        header('Location: ./index.php'); // Redirige al index después de eliminar
        exit();
    }
}
