<?php
// require_once 'app/Config/Controller.php';
// require_once 'app/Config/Views.php';
class Principal extends Controller
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }
    public function contactos()
    {
        $data['title'] ="Contactos";
        $this->views->getView('principal','contactos',$data);
    }
}
?>