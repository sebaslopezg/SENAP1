<?php
require_once 'MYSQL.php'; // Asegúrate de que la clase MySQL está en el directorio modelos

class AsignarModel
{
    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    function obtenerAprendices()
    {
        $consulta = "SELECT * FROM aprendices";
        $resultado = $this->db->efectuarConsulta($consulta);

        $aprendices = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $aprendices[] = $fila;
        }
        return $aprendices;
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

    public function mostrarAsignaciones()
    {
        $consulta = "SELECT aprendices.nombre_Apr, aprendices.apellido_Apr, aprendices.num_Doc_Apr, cursos.nombre_Cur 
                     FROM aprendices_has_cursos 
                     JOIN aprendices ON aprendices.id_aprendiz = aprendices_has_cursos.Aprendices_id_aprendiz
                     JOIN cursos ON cursos.id_Cur = aprendices_has_cursos.Cursos_id_Cur";

        $resultado = $this->db->efectuarConsulta($consulta);

        $asignaciones = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $asignaciones[] = $fila;
        }
        return $asignaciones;
    }

    public function agregarAsignacion($idAprendiz, $idCurso)
    {
        $consulta = "INSERT INTO aprendices_has_cursos (Aprendices_id_aprendiz, Cursos_id_Cur) VALUES (?, ?)";
        return $this->db->efectuarConsulta($consulta, [$idAprendiz, $idCurso], 'ss');
    }

    public function __destruct()
    {
        $this->db->desconectar();
    }
}
