<?php
  class UsuarioModel extends Query
  {
    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuario(string $usuario,string $clave)
    {
        $sqlUsuario="SELECT * FROM usuario WHERE usuario='$usuario' AND password='$clave'";
        return $this->selectPDO($sqlUsuario);
    }
   /* public function getCategoria()
    {
        $sqlCategoria="SELECT * FROM categoria";
        return $this->selectAll($sqlCategoria);
    }*/
  }
?>