<?php
class Views
{
    public function getView($ruta,$vista,$data="")
    {
        if($ruta=="home")
        {
            $vista="app/Views/".$vista.".php";
        }
        else
        {
            $vista="app/Views/".$ruta.".php";
        }
        return $vista;
    }
}
?>