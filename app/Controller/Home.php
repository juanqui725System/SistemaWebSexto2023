<?php
require_once 'app/Config/Controller.php';
require_once 'app/Config/Views.php';
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title']="Pagina Principal";
        $this->views->getView('home','index',$data); 
    }
}
?>