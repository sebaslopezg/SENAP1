<?php 

require_once 'MYSQL.php'; 

class AprendicesModel{

    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    function mostrarAprendices(){
        $consulta = "SELECT * FROM aprendices";
        $resultado = $this->db->efectuarConsulta($consulta);

        $aprendices = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $aprendices[] = $fila;
        }
        return $aprendices;
    }
}

?>