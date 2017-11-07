<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once 'vendor/autoload.php'; 
require_once 'controlador/controlador.php';

session_start();

//Para mostrar error de codigo
$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app->get('/productos/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');
    
    //$info = [];
    //$info['nombre_producto'] = $name;
    
    $registros = new Registros();
    $respuesta = $registros->getid($id);
    echo json_encode($respuesta);
    
});

$app->post('/productos', function ($request, $response, $args) {
     $data = $request->getparsedBody();
   
     
    $registros = new Registros();
    $respuesta = $registros->Crear($data);
    
    if($respuesta==true){
         return $response->withJson("datos registrados correctamente", 200);
    }else{
        return $response->withJson("datos invalidos", 400);
    }
});

$app->delete('/productos/{id}', function ($request, $response, $args) {
     $id = $request->getAttribute('id');
    
    $registros = new Registros();
    $respuesta = $registros->eliminar($id);
   
    if($respuesta==true){
        return $response->withJson("datos eliminados correctamente", 200);
    }else{
         return $response->withJson("los datos no se eliminaron", 400);
    }
    
});

$app->put('/productos/{id}', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    
   $registros = new Registros();
   $respuesta = $registros->modificar($data);
     if($respuesta==true){
        return $response->withJson("se actualizaron los datos correctamente", 200);
    }else{
        return $response->withJson("error al actualizar los datos", 400);
    }
    
});

$app->post('/usuario', function ($request, $response, $args){
      $data =$request->getParsedBody();

      $registros = new Registros();
      $respuesta = $registros->sesiones($data);

       if($respuesta==true){
        return $response->withJson("inicio de sesion correctamente", 200);
        //echo json_encode ("inicio de sesion correctamente");
    }else{
        return $response->withJson("datos invalidos", 400);
        //echo json_encode("datos invalidos");
    }

});

$app->run();