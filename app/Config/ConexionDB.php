<?php
class ConexionDB {
    private $conn;
    public function __construct()
    {
        $pdo="mysql:host=".HOST.";port=".PORT.";dbname=".DATA_BASE.";".CHARSET;
        try
        {
            $this->conn = new PDO($pdo, USER, PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            die("Error en la conexion".$e->getMessage());
        }
        
    }
    public function connect() 
    {
        return $this->conn;
    }
    public function close() {
        $this->conn->close();
    }
    public function executeQuery($sql) {
        /*$result = $this->conn->query($sql);

        if (!$result) {
            die("Error en la consulta: " . $this->conn->error);
        }
        return $result;
        */
    }
}
?>
