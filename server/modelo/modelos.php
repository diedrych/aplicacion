<?php

include_once __DIR__ . '/../baseDatos/modelo.php';

class ConsultaModelo extends Modelo {

    public function getid($id_producto) {

        $bd = $this->baseDatos->getDB();
        $consulta = $bd->prepare('SELECT * FROM productos WHERE id_producto=:id_producto');
        $consulta->bindParam('id_producto', $id_producto, PDO::PARAM_INT);
        $consulta->execute();
        return $consulta->fetchAll();
    }

    public function crearproducto($crearId, $crearNombre, $crearDescripcion, $crearCosto, $crearCategoria, $crearUsuario) {

        //Verifica si el producto existe antes de insertarlo.    
        $ProductoExiste = $this->getid($crearId);
        if (count($ProductoExiste) > 0 ) {
            return false;
        }

        $bd = $this->baseDatos->getDB();
        $consulta = $bd->prepare('INSERT INTO 
                                 productos(id_producto, nombre_producto, descripcion, costo, id_categoria, id_usuario)
                                 VALUES (:id_producto, :nombre_producto, :descripcion, :costo, :id_categoria, :id_usuario)');

        $consulta->bindParam(':id_producto', $crearId, PDO::PARAM_INT);
        $consulta->bindParam(':nombre_producto', $crearNombre, PDO::PARAM_STR);
        $consulta->bindParam(':descripcion', $crearDescripcion, PDO::PARAM_STR);
        $consulta->bindParam(':costo', $crearCosto, PDO::PARAM_INT);
        $consulta->bindParam(':id_categoria', $crearCategoria, PDO::PARAM_INT);
        $consulta->bindParam(':id_usuario', $crearUsuario, PDO::PARAM_INT);
        $consulta->execute();
        $consulta->errorCode();
        return $consulta;
    }

    public function eliminar($eliminarId) {

        $bd = $this->baseDatos->getDB();
        $consulta = $bd->prepare('DELETE FROM productos WHERE id_producto=:id_producto');
        $consulta->bindParam(':id_producto', $eliminarId, PDO::PARAM_STR);
        $consulta->execute();
        return $consulta;

    }

    public function seleccionVariables($id_producto) {
        $bd = $this->baseDatos->getDB();
        $consulta = $bd->prepare('SELECT * FROM productos WHERE id_producto=:id_producto;');
        $consulta->bindParam(':id_producto', $id_producto, PDO::PARAM_STR);
        $consulta->execute();
        return $consulta->fetch();
    }

    public function modificarProducto($id_producto, $nombre_producto, $descripcion, $costo) {
        $bd = $this->baseDatos->getDB();

        $consulta = $bd->prepare('UPDATE productos SET nombre_producto=:nombre_producto, descripcion=:descripcion, costo=:costo WHERE id_producto=:id_producto');
        $consulta->bindparam(':id_producto', $id_producto, PDO::PARAM_INT);
        $consulta->bindparam(':nombre_producto', $nombre_producto, PDO::PARAM_STR);
        $consulta->bindparam(':descripcion', $descripcion, PDO::PARAM_STR);
        $consulta->bindparam(':costo', $costo, PDO::PARAM_INT);

        $consulta->execute();
        return $consulta;
    }

    public function sesion($id_usuario, $contraseña){
        $bd = $this->baseDatos->getDB();

        $consulta = $bd->prepare('SELECT * FROM usuario WHERE id_usuario =:id_usuario AND contrasena=:contrasena');
        $consulta->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $consulta->bindParam(':contrasena', $contraseña, PDO::PARAM_INT);
        $consulta->execute();
        return $consulta->fetchAll();
    }

}
