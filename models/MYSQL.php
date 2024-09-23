<?php
class MySQL
{
    private $ipServidor = "localhost";
    private $usuarioBase = 'root';
    private $contrasena = '';
    private $nombreBaseDatos = 'db_aprendices';
    private $conexion;
    public function __construct(
        $ipServidor = null,
        $usuarioBase = null,
        $contrasena = null,
        $nombreBaseDatos = null
    ) {
        if ($ipServidor) $this->ipServidor = $ipServidor;
        if ($usuarioBase) $this->usuarioBase = $usuarioBase;
        if ($contrasena) $this->contrasena = $contrasena;
        if ($nombreBaseDatos) $this->nombreBaseDatos = $nombreBaseDatos;
    }

    public function conectar()
    {
        try {
            $this->conexion = new mysqli($this->ipServidor, $this->usuarioBase, $this->contrasena, $this->nombreBaseDatos);
            if ($this->conexion->connect_error) {
                throw new Exception("Error en la conexión: " . $this->conexion->connect_error);
            }
            $this->conexion->set_charset("utf8");
        } catch (Exception $e) {
            die("Excepción capturada: " . $e->getMessage());
        }
    }

    public function getConexion()
    {
        return $this->conexion;
    }
    public function desconectar()
    {
        if ($this->conexion) {
            $this->conexion->close();
        }
    }

    public function efectuarConsulta($consulta, $parametros = [], $tipos = '')
    {
        try {
            $stmt = $this->conexion->prepare($consulta);
            if (!$stmt) {
                throw new Exception("Error en la preparación de la consulta: " . $this->conexion->error);
            }
            if ($parametros) {
                $stmt->bind_param($tipos, ...$parametros);
            }
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($resultado) {

                $stmt->close();
                return $resultado;
            } else {
                $stmt->close();
                return $this->conexion->affected_rows; // Para consultas que no devuelven un conjunto de resultados
            }
        } catch (Exception $e) {
            die("Excepción capturada: " . $e->getMessage());
        }
    }

    public function ultimoIdInsertado()
    {
        return $this->conexion->insert_id;
    }
}
