<?php

class UsuarioSesion{
    
    private $nombre;

    public function __construct(){}
    
    //captura el nombre y lo almacena en nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    
    public function getNombre(){
        return $this->nombre;
    }

}