<?php
class Views{
    public function getView($ruta,$vista,$data="")
    {
        if($ruta=="inicio"){
            $vista="app/Views/".$vista.".php";
        }
        else
        {
            $vista="app/Views/".$ruta."/".$vista.".php";
        }
        require $vista;
    }
}