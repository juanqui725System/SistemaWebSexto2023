<?php
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
     {
         
     }
     //vista abaut --> Acerca de -->Servicios
     public function about()
     {
         $data['title'] ="Servicios";
         $this->views->getView('principal','about',$data);
     }
     //mostramos el comercio (shop)
     public function shop()
     {
         $data['title'] ="Nuestro Producto";
         $this->views->getView('principal','shop',$data);
     }
    
     //contactos
     public function contactos()
     {
         $data['title'] ="Contactos";
         $this->views->getView('principal','contact',$data);
     }
}
?>