<?php
class ConexionDB{
    private $servername;
    private $username;
    private $password;
    private $database;
    private $puerto;
    private $cnn;
    public function __construct($servername, $username, $password, $database,$puerto)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->puerto = $puerto;
    }
    public function connect()
    {   
        $this->cnn=mysqli($this->servername,$this->username,$this->password,$this->database,$this->puerto);
        if($this->cnn->connect_error)
        {
            die("Error al conectar a la BD".$this->cnn->connect_error);
        }
        return $this->cnn;
    }
    public function close()
    {
        $this->conn->close();
    }
    public function excuteQuery($sql)
    {
        $result=$this->conn->query($sql);
        if(!$result)
        {
            die("Existe error en la consulta".$this->conn->error_string());
        }
        return $result;
    }
}
    
?>