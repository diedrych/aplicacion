<?php

include_once __DIR__ . '/../modelo/modelos.php';

class Registros {

    var $consultamodelo;

    public function __construct() {
        $this->consultamodelo = new ConsultaModelo();
    }

    public function getid($id_producto) {
        //$nombre_producto = $datos['nombre_producto'];

        $seleccion = $this->consultamodelo->getid($id_producto);

        $id_usuario = $seleccion[0]['id_usuario'];

        if($id_usuario == $_SESSION['usuario']){
         return $seleccion;   
     }else{
        return false;
     }
      
        
    }

    public function Crear(array $datos) {
        $crearId = $datos['id_producto'];
        $crearNombre = $datos['nombre_producto'];
        $crearDescripcion = $datos['descripcion'];
        $crearCosto = $datos['costo'];
        $crearCategoria = $datos['id_categoria'];
        $crearUsuario = $_SESSION['usuario'];


        $crear = $this->consultamodelo->crearproducto($crearId, $crearNombre, $crearDescripcion, $crearCosto, $crearCategoria, $crearUsuario);
        return $crear;
    }

    public function eliminar($eliminarId) {
         $existe = $this->getid($eliminarId);
         if($existe){

        $eliminar = $this->consultamodelo->eliminar($eliminarId);
        return $eliminar;
    }else{
        return false;
    }
    }

    public function traerDatos(array $datos) {
        $id_producto = $datos['id_producto'];
        $trae = $this->consultamodelo->seleccionVariables($id_producto);
        return $trae;
    }

    public function modificar(array $datos) {

        $id_producto = $datos['id_producto'];
        $nombre_producto = $datos['nombre_producto'];
        $descripcion = $datos['descripcion'];
        $costo = $datos['costo'];

        $existe = $this->getid($id_producto);
        if($existe){
             $actualizar = $this->consultamodelo->modificarProducto($id_producto, $nombre_producto, $descripcion, $costo);
             return $actualizar;
        }else{
            return false;
        }

       
    }


    public function sesiones(array $datos){
        $id_usuario = $datos['id_usuario'];
        $contraseña = $datos['contraseña'];

        $iniciar = $this->consultamodelo->sesion($id_usuario, $contraseña);

        if($iniciar==true){
              $_SESSION["usuario"] = $id_usuario;
        }
        return $iniciar;  
    }

    

}
