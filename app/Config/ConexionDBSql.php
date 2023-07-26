<?php
class ConexionDBSql {
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
        $this->port= $port;
    }
    public function connect() 
    {
        try
        {
           $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname,$this->port);
           //$this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
           if($this->conn->connect_errno)
           {
            printf("Error al conectarse: %s\n",$this->conn->connect_errno);
           }

        }
        catch(Exception $ex)
        {
            die ("Error al cargar el metodo mysl".$ex->getMessage());
            exit;
        }
        return $this->conn;
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
