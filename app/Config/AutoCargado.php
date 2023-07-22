<?php 
spl_autoload_register(function($class){
    if(file_exists("app/Config/".$class.".php"))
    {
        require_once("app/Config/".$class.".php");
    }
});
?>