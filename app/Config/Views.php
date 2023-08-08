<?php
class Views{
    public function getView($controlador,$vista,$data="")
    {
        if($controlador=="inicio"){

            $vista="app/Views/".$vista.".php";
        }
        else
        {
            $vista="app/Views/".$controlador."/".$vista.".php";
        }
        require $vista;
    }
}