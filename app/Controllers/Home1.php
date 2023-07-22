<?php
// require_once 'app/Config/Controller.php';
// require_once 'app/Config/Views.php';
class Home1 extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] ="Pagina Principal";
        $this->views->getView('home','index',$data);
    }
}
?>