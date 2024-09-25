<?php
require_once 'MYSQL.php'; // Asegúrate de que la clase MySQL está en el directorio modelos

class CursoModel
{
    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    public function agregarCurso($nombre, $descripcion)
    {
        $consulta = "INSERT INTO cursos (nombre_Cur, descripcion_Cur) VALUES (?, ?)";
        return $this->db->efectuarConsulta($consulta, [$nombre, $descripcion], 'ss');
    }

    public function obtenerCursos()
    {
        $consulta = "SELECT * FROM cursos";
        $resultado = $this->db->efectuarConsulta($consulta);

        $cursos = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $cursos[] = $fila;
        }
        return $cursos;
    }

    public function obtenerCursoPorId($id)
    {
        $consulta = "SELECT * FROM cursos WHERE id_Cur = ?";
        $resultado = $this->db->efectuarConsulta($consulta, [$id], 'i');
        return mysqli_fetch_assoc($resultado);
    }

    public function actualizarCurso($id, $nombre, $descripcion)
    {
        $consulta = "UPDATE cursos SET nombre_Cur = ?, descripcion_Cur = ? WHERE id_Cur = ?";
        return $this->db->efectuarConsulta($consulta, [$nombre, $descripcion, $id], 'ssi');
    }

    /* public function eliminarCurso($id)
    {
        $consulta = "DELETE FROM cursos WHERE id_Cur = ?";
        return $this->db->efectuarConsulta($consulta, [$id], 'i');
    } */

    public function __destruct()
    {
        $this->db->desconectar();
    }
}
