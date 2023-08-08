<?php
class Query extends ConexionDB//ConexionDBSql//
{
    private $cnn,$con,$sql,$datos;
    public function __construct()
    {
        //$this->cnn = new ConexionDBSql(HOST,USER,PASSWORD,DATA_BASE,PORT);
        $this->cnn=new ConexionDB();
        $this->con=$this->cnn->connect();
    }
    public function select(string $sql )
    {
        $this->sql=$sql;
        $result=$this->con->query($this->sql);
        $data=$result->fetch_all();
        return $data;
    }
    public function selectPDO(string $sql )
    {
        $this->sql=$sql;
        $result= $this->con->prepare($this->sql);
        $result->execute();
        $data=$result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    
    public function selectAll(string $sql)
    {
        $this->sql=$sql;
        $result= $this->con->prepare($this->sql);
        $result->execute();
        $data=$result->get_result();
        return $data;
    }
   public function selectAllPDO(string $sql)
    {
        $this->sql=$sql;
        
        $result= $this->con->prepare($this->sql);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function savePDO(string $sql, array $datos)
    {
        $this->sql=$sql;
        $this->datos=$datos;
        $insert= $this->con->prepare($this->sql);
        $data=$insert->execute($this->datos);
        //$insert=$this->con->query($this->sql);
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
    public function insertarPDO(string $sql, array $datos){
        $this->sql=$sql;
        $this->datos=$datos;
        $insert= $this->con->prepare($this->sql);
        $data=$insert->execute($this->datos);
        //$insert=$this->con->query($this->sql);
        if($data) //$insert
        {
            $res=$this->con->lastInsertId();//$this->con->insert_id;
        }
        else
        {
            $res=0;
        }
        return $res;
    }

}
?>