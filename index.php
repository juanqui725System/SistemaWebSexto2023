<?php
require_once 'app/Config/Config.php';
$ruta=!empty($_GET['url'])? $_GET['url']:"home/index";
$array =explode("/",$ruta);
$controller=ucfirst($array[0]);
$metodo="index";
$parametro="";
if(!empty($array[1])){
    if(!empty($array[1]!="")){
        $metodo=$array[1];
    }
}
if(!empty($array[2])){
    if(!empty($array[2]!="")){
        for($i=2;$i<count($array);$i++){
            $parametro.=$array[$i].",";
        }
        $parametro=trim($parametro, ",");
        echo $parametro;
    }
}
require_once 'app/Config/Autoload.php';
require_once 'app/Config/Helpers.php';
$dirControllers="app/Controllers/".$controller.".php";
if(file_exists($dirControllers))
{
    //echo $dirControllers."<br> Existe el controlador el medtodo es=".$metodo;
    require_once $dirControllers;
    $controller=new $controller();
    if(method_exists($controller,$metodo))
    {
        $controller->$metodo($parametro);
    }
    else
    {
        //echo "Error pagina contactos 123";
       header('Location:'.BASE_URL.'errors');
    }
}
else
{
    header('Location:'.BASE_URL.'errors');
}
?>