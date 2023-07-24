<?php
  class ProductoModel extends Query
  {
    public function __construct()
    {
        parent::__construct();
    }
    public function getCategoria()
    {
        $sqlCategoria="SELECT * FROM categoria";
        return $this->selectAll($sqlCategoria);
    }
    public function getProducto ()
    {
        $sqlCategoria="SELECT * FROM producto ORDER BY id DESC LIMIT 12";
        return $this->selectAll($sqlCategoria);
    }
    public function getProductoId ($id_Producto)
    {
        $sqlProducto="SELECT * FROM producto WHERE ID=$id_Producto";
        return $this->select($sqlProducto);
    }


  }
?>