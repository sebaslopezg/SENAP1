<?php 

require_once 'MYSQL.php'; 

class ReportesModel{

    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    function CantidadCursos(){
        $sql = "SELECT COUNT(id_Cur) AS TOTAL FROM cursos";
        $resultado = $this->db->efectuarConsulta($sql);

        $cursos = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $cursos[] = $fila;
        }
        return $cursos[0]['TOTAL'];
    }
    function CantidadAprendices(){
        $sql = "SELECT DISTINCT COUNT(Aprendices_id_aprendiz) AS TOTAL FROM aprendices_has_cursos";
        $resultado = $this->db->efectuarConsulta($sql);

        $aprendices = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $aprendices[] = $fila;
        }
        return $aprendices[0]['TOTAL'];
    }
    function CantidadAprendicesSinCursos(){
        $sql = "SELECT (SELECT DISTINCT COUNT(id_aprendiz) FROM aprendices) - (SELECT DISTINCT COUNT(Aprendices_id_aprendiz) FROM aprendices_has_cursos) AS TOTAL";
        $resultado = $this->db->efectuarConsulta($sql);

        $aprendices = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $aprendices[] = $fila;
        }
        return $aprendices[0]['TOTAL'];
    }

    function getCursos(){
        $sql = "SELECT * FROM cursos";
        $resultado = $this->db->efectuarConsulta($sql);

        $cursos = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $cursos[] = $fila;
        }
        return $cursos;
    }

    function getCursosReporte(){
        $sql = "SELECT nombre_Cur, descripcion_Cur, fecha_Creacion_Cur FROM cursos";
        $resultado = $this->db->efectuarConsulta($sql);

        $cursos = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $cursos[] = $fila;
        }
        return $cursos;
    }

    function getAprendicesReporte(){
        $sql = "SELECT aprendices.nombre_Apr, aprendices.apellido_Apr, aprendices.num_Doc_Apr, aprendices.correo_Apr FROM aprendices
                join aprendices_has_cursos on aprendices_has_cursos.Aprendices_id_aprendiz = aprendices.id_aprendiz
                WHERE aprendices_has_cursos.Aprendices_id_aprendiz = aprendices.id_aprendiz";
        $resultado = $this->db->efectuarConsulta($sql);

        $arrResp = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $arrResp[] = $fila;
        }
        return $arrResp;
    }
    function getAprendicesSinCursosReporte(){
        $sql = "SELECT nombre_Apr, apellido_Apr, correo_Apr FROM aprendices a WHERE NOT EXISTS 
                (SELECT * FROM aprendices_has_cursos b
                WHERE a.id_aprendiz = b.Aprendices_id_aprendiz);";
        $resultado = $this->db->efectuarConsulta($sql);

        $arrResp = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $arrResp[] = $fila;
        }
        return $arrResp;
    }

}

?>