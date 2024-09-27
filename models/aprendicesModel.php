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

    function agregarAprendiz($numeroDoc, $nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email){
        $consulta = "INSERT INTO aprendices (num_Doc_Apr , nombre_Apr, apellido_Apr, genero_Apr, fecha_Nacimiento_Apr, telefono_Apr, correo_Apr) VALUES (?, ?, ?, ?, ?, ?, ?)";
        return $this->db->efectuarConsulta($consulta, [$numeroDoc, $nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email], 'sssssss');
    }

    function actualizarAprendiz($numeroDoc, $nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email){
        $sql = "UPDATE aprendices SET nombre_Apr = ?, apellido_Apr = ?, genero_Apr = ?, fecha_Nacimiento_Apr = ?, telefono_Apr = ?, correo_Apr = ? WHERE num_Doc_Apr = ?";
        return $this->db->efectuarConsulta($sql, [$nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email, $numeroDoc], 'sssssss');
    }
}

?>