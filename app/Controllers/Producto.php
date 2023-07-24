<?php
class Producto extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
    }
    public function categoria()
    {
        $data['title'] ="Categoria";
        $data['categorias'] =$this->model->getCategoria();
        $this->views->getView('producto','categoria',$data);
    }
    /*Obtenermos los datos del producto*/
    public function producto()
    {
        $data['title'] ="Producto";
        $data['productos'] =$this->model->getProducto();
        $this->views->getView('producto','producto',$data);
    }
     //Detalle del producto por  Id
     public function detalleProducto($id_producto)
     {
        $data['producto'] =$this->model->getProductoId($id_producto);

        $data['title'] =$data['producto']['NOMBRE'];
         //$data['productoDetalle'] =$this->model->getProductoId($id_producto);
         $this->views->getView('producto','detalleProducto',$data);
     }
   
}
?>