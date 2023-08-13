<?php
class Views{
    public function getView($controlador,$vista,$data="")
    {
        $controlador=get_class($controlador);
        if($controlador=="Inicio"){

            $vista="app/Views/".$vista.".php";
        }
        else
        {

            $vista="app/Views/".$controlador."/".$vista.".php";
        }
        require $vista;
    }
}