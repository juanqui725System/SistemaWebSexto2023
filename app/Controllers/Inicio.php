<?php
class Inicio extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] ="Pagina Principal";
        //$data['categorias'] =$this->model->getCategoria();
        $this->views->getView($this,'index',$data);//this=home   vista index.p
    }
   
}
?>