<?php
class Query extends ConexionDBSql//ConexionDB
{
    private $cnn,$pdo,$con,$sql,$datos;
    public function __construct()
    {
        echo "Erroroooo alconectarse";
        $this->cnn = new ConexionDBSql(HOST,USER,PASSWORD,DATA_BASE);
        $this->con=$this->cnn->connect();

        //$this->pdo = new ConexionDB();
        //$this->con=$this->cnn->connect();
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
        /*$this->sql=$sql;
        $result= $this->con->prepare($this->sql);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        */
        //----------------//
        //$result=mysqli_query($this->con,$this->sql);
        //$data=$result->fetch_all($result,MYSQLI_ASSOC);
        return $data;
    }
    public function save(string $sql, array $datos)
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
    public function insertar(string $sql, array $datos){
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