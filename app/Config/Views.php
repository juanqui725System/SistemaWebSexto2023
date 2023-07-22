<?php
class Views{
    public function getView($ruta,$vista,$data="")
    {
        if($ruta=="home"){
            $vista="app/Views/".$vista.".php";
        }
        else
        {
            echo "Vista error";
            $vista="app/Views/".$ruta."/".$vista.".php";
        }
        require $vista;
    }
}