<?php
class Connect{
    protected $db_connect;
    function __construct() {
        $db = new Tools();
        $db->generateDataConnect();
        try {
            $this->db_connect = new PDO('mysql:host=localhost; dbname=example_db', 'username698', '0000');
            $this->db_connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db_connect->exec(__charset);
            echo ('Se realizo la conexion');
        } catch (Exception $e) {
            die("Error en la linea: {$e->GetLine()} || en el archivo: 
            {$e->GetFile()} || Por la razon: {$e->GetMessage()} || Con el codigo de error: 
            {$e->GetCode()}");
        }

    }
}