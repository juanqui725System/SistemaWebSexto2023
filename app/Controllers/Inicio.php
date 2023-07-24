<?php
//require_once 'app/Config/Controller.php';
require_once 'app/Config/Controller.php';
// require_once 'app/Config/Views.php';
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
        $data['categorias'] =$this->model->getCategoria();
        print_r($data);
        $this->views->getView('inicio','index',$data);
    }
   
}
?>