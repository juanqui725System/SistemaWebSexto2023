<?php
class Usuario extends Controller
{
  public function __construct()
  {
    session_start();
    parent::__construct();
    
  }
    public function index()
    {
      /*  $data['title'] ="Pagina Principal";
        //$data['categorias'] =$this->model->getCategoria();*/
       // print_r($this->model->getUsuario())."<br>";
       // var_dump($this->model->getUsuario());
        //$this->views->getView($this,'index');//,$data);
    }
    
    public function validar()  {
      if(!(empty($_POST['usuario']) || empty($_POST['password'])))
      {
        $data=$this->model->getUsuario($_POST['usuario'],$_POST['password']);
        //echo json_encode($data);
        if($data)
        {
          $_SESSION['idUsuario']=$data['ID'];
          $_SESSION['nombre']=$data['NOMBRE'];
          $_SESSION['usuario']=$data['USUARIO'];
          $msg='OK';
        }
        else
        {
          $msg='Usuario o contraseña incorrecta';
        }
        echo json_encode($msg);
      }
      else
      {
      echo json_encode('Introduzca todos los datos');
      }

    }
   
}
?>