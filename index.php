<?php
require_once 'app/Config/Config.php';
$ruta=!empty($_GET['url'])? $_GET['url']:"home1/index";
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

require_once 'app/Config/AutoCargado.php';
require_once 'app/Config/Helpers.php';

$dirControllers="app/Controllers/".$controller.".php";
if(file_exists($dirControllers))
{
    
    require_once $dirControllers;
    try
    {
        $controller=new $controller();
        if(method_exists($controller,$metodo))
        {
            //echo "<br>por si sigue controller";
            $controller->$metodo($parametro);
        }
        else
        {
            header('Location:'.BASE_URL.'errors');
        }
    }
    catch(Exception $e)
    {
        echo "error al cargar el metodo ".$e->getMessage();
    }
    
}
else
{
    header('Location:'.BASE_URL.'errors');
}
?>