<?php

include_once __DIR__. '/conexionBD.php';

class Modelo{
    var $baseDatos;
            
    public function __construct(){
        $this->baseDatos = baseDatos::singleton();
    }
    
}

