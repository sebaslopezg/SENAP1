<?php 

require_once 'MYSQL.php'; 

class ReportesModel{

    private $db;

    public function __construct()
    {
        $this->db = new MySQL();
        $this->db->conectar();
    }

}

?>