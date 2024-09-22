<?php
require_once 'MYSQL.php'; // Asegúrate de que la clase MySQL está en el directorio modelos

class ComentarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    public function obtenerComentarios()
    {
        $consulta = "SELECT * FROM comentarios";
        $resultado = $this->db->efectuarConsulta($consulta);

        $comentarios = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $comentarios[] = $fila;
        }
        return $comentarios;
    }

    public function obtenerComentarioPorId($id)
    {
        $consulta = "SELECT * FROM comentarios WHERE id = ?";
        $resultado = $this->db->efectuarConsulta($consulta, [$id], 'i');
        return mysqli_fetch_assoc($resultado);
    }

    public function agregarComentario($autor, $contenido)
    {
        $consulta = "INSERT INTO comentarios (autor, contenido) VALUES (?, ?)";
        return $this->db->efectuarConsulta($consulta, [$autor, $contenido], 'ss');
    }

    public function actualizarComentario($id, $autor, $contenido)
    {
        $consulta = "UPDATE comentarios SET autor = ?, contenido = ? WHERE id = ?";
        return $this->db->efectuarConsulta($consulta, [$autor, $contenido, $id], 'ssi');
    }

    public function eliminarComentario($id)
    {
        $consulta = "DELETE FROM comentarios WHERE id = ?";
        return $this->db->efectuarConsulta($consulta, [$id], 'i');
    }

    public function __destruct()
    {
        $this->db->desconectar();
    }
}
