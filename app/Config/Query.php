<?php
class Query extends ConexionDB
{
    private $cnn,$con,$sql,$datos;
    public function __construct()
    {
        $this->cnn = new ConexionDB(HOST,USER,PASSWORD,DATA_BASE);
        $this->con=$this->cnn->connect();
    }
    public function select(string $sql )
    {
        $this->sql=$sql;
        $result= $this->con->prepare($this->sql);
        $result->execute();
        $data=$result->fetch();
        return $data;
    }
    public function selectAll(string $sql)
    {
        $this->sql=$sql;
        //$result= $this->con->prepare($this->sql);
        //$result->execute();
        $result=mysqli_query($this->con,$this->sql);
        $data=$result->fetch_all($result,MYSQLI_ASSOC);
        return $data;
    }
    public function save(string $sql, array $datos)
    {
        $this->sql=$sql;
        $this->datos=$datos;
        //$insert= $this->con->prepare($this->sql);
        //$data=$insert->execute($this->datos);
        $insert=$this->con->query($this->sql);
        if($insert) //$data
        {
            $res=1;
        }
        else
        {
            $res=0;
        }
        return $res;
    }
    public function insertar(string $sql, array $datos){
        $this->sql=$sql;
        $this->datos=$datos;
        //$insert= $this->con->prepare($this->sql);
        //$data=$insert->execute($this->datos);
        $insert=$this->con->query($this->sql);
        if($insert) //$data
        {
            $res=$this->con->insert_id;
        }
        else
        {
            $res=0;
        }
        return $res;
    }


}
?>