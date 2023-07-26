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
        $this->port=$port;
    }
    public function connect() 
    {
        try
        {
            echo "<br>".$this->host;
            echo "<br>".$this->username;
            echo "<br>".$this->password;
            echo "<br>".$this->dbname;
            echo "<br>".$this->port;
            echo "<br>";

           $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
           if($this->conn->connect_errno)
           {
            printf("Error al conectarse: %s\n",$this->conn->connect_errno)
           }
           //$mysqli = new mysqli("127.0.0.1", "root", "", "dbsistemafinalsexto","3307");

        }
        catch(Exception $ex)
        {
            die ("error al cargar el metodo mysl".$ex->getMessage());
            exit;
            if ($this->conn->connect_error) {
                die("Error al conectar a la base de datos: " . $this->conn->connect_error);
            }
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
