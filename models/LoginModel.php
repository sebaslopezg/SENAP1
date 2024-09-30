<?php 

require_once 'MYSQL.php'; 

class LoginModel{

    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    //crear validar
    function mostrarAdmins(){
        $consulta = "SELECT * FROM admin";
        $resultado = $this->db->efectuarConsulta($consulta);

        $admins = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $admins[] = $fila;
        }
        return $admins;
    }


}

?>