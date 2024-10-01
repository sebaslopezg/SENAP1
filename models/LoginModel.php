<?php

require_once 'MYSQL.php';

class LoginModel
{

    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

    //crear validar
    function comparar($usuario, $pass)
    {
        $consulta = "SELECT usuario_Adm, pass_Adm FROM `admin` WHERE usuario_Adm = ? AND pass_Adm = ?";

        $resultado = $this->db->efectuarConsulta($consulta, [$usuario, $pass], 'ss');

        $admins = [];
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $admins[] = $fila;
        }
        return $admins;
    }
}
