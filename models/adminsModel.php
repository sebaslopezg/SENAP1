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

    ///codigo ejemplo
    //function agregarAprendiz($numeroDoc, $nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email){
    //    $consulta = "INSERT INTO aprendices (num_Doc_Apr , nombre_Apr, apellido_Apr, genero_Apr, fecha_Nacimiento_Apr, telefono_Apr, correo_Apr) VALUES (?, ?, ?, ?, ?, ?, ?)";
    //    return $this->db->efectuarConsulta($consulta, [$numeroDoc, $nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email], 'sssssss');
    //}
//
    //function actualizarAprendiz($numeroDoc, $nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email){
    //    $sql = "UPDATE aprendices SET nombre_Apr = ?, apellido_Apr = ?, genero_Apr = ?, fecha_Nacimiento_Apr = ?, telefono_Apr = ?, correo_Apr = ? WHERE num_Doc_Apr = ?";
    //    return $this->db->efectuarConsulta($sql, [$nombreAprendiz, $apellidoAprendiz, $generoAprendiz, $fechaNacimiento, $telefono, $email, $numeroDoc], 'sssssss');
    //}
}

?>