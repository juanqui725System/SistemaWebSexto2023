<?php
class ConeccionDB {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $port;
    private $conn;
    public function __construct($hostname, $username, $password, $dbname,$port=3036) {
        $this->host = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->port=$port;
    }
    public function connect() 
    {
        try
        {
           // $this->conn = new mysqli_conect($this->host, $this->username, $this->password, $this->dbname,$this->port);
           $mysqli = new mysqli("127.0.0.1", "root", "", "dbsistemafinalsexto","3037");

        }
        catch(Exception $ex)
        {
            die ("error al cargar el metodo ".$ex->getMessage());
            exit;
            if ($this->conn->connect_error) {
                die("Error al conectar a la base de datos: " . $this->conn->connect_error);
            }
        }
       /*
        return $this->conn;
        */
    }
    public function close() {
        $this->conn->close();
    }
    public function executeQuery($sql) {
        $result = $this->conn->query($sql);

        if (!$result) {
            die("Error en la consulta: " . $this->conn->error);
        }
        return $result;
    }
}
?>
