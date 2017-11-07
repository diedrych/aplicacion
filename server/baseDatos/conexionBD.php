<?php

require_once __DIR__. '/configBD.php';

class baseDatos {

    private static $instancia;
    private $bd;

    private function __construct() {
        global $configuracionBD;
        $this->bd = new PDO("$configuracionBD[rdms]:host=$configuracionBD[host]; dbname=$configuracionBD[nombre_bd]", $configuracionBD['usuario'], $configuracionBD['password']);

        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    public static function singleton() {
        if (!isset(self::$instancia)) {
            $myClass = __CLASS__;
            self::$instancia = new $myClass;
        }
        return self::$instancia;
    }

    public function getDB() {
        return $this->bd;
    }

    public function __clone() {
        trigger_error('clone this object is restricted', E_USER_ERROR);
    }
}
    