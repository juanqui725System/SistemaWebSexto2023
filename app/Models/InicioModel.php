<?php
  class InicioModel extends Query
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
  }
?>