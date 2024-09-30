<?php 

require_once 'MYSQL.php'; 

class AdminsModel{

    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    function mostrarAdmins(){
        $consulta = "SELECT * FROM admin";
        $resultado = $this->db->efectuarConsulta($consulta);

        $admins = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $admins[] = $fila;
        }
        return $admins;
    }

    function agregarAdmin($usuario, $pass, $email, $fnombre, $apellido){
        $consulta = "INSERT INTO `admin` (usuario_Adm, pass_Adm, correo_Adm, nombre_Adm, apellido_Adm) VALUES (?, ?, ?, ?, ?)";
        return $this->db->efectuarConsulta($consulta, [$usuario, $pass, $email, $fnombre, $apellido], 'sssss');
    }

    function actualizarAdmin($usuario, $pass, $email, $fnombre, $apellido, $idAdmin){
        $consulta = "UPDATE `admin` SET usuario_Adm = ?, pass_Adm = ?, correo_Adm = ?, nombre_Adm = ?, apellido_Adm = ? WHERE id_Adm = ?";
        return $this->db->efectuarConsulta($consulta, [$usuario, $pass, $email, $fnombre, $apellido], 'ssssss');
    }
}

?>