<?php
class Query extends ConexionDB
{
    private $cnn, $con, $datos;
    public function __construct()
    {
        $this->cnn=new ConexionDB(HOST,USER,PASSWORD,DATA_BASE,PORT);
        $this->con=$this->con->connect();
    }
}
?>