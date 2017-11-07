<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
        <link rel="stylesheet" href="estilosC.css">

    </head>
    <body class="transparencia fondo2 ">
        <div class="container">
            <header>
                <div class="container">
                    <div class="row fondotitulo">
                         <a href="../server/destroy.php">Cerrar Sesión</a>
                        <div class="col-md-6 col-md-offset-4">
                            <h1>Aplicacion de Obsequios</h1>
                        </div>
                    </div>
                </div>        
            </header>
            <br>
            <br>
            <div class="container">
               
                <div class="row">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="id" class="col-sm-2 control-label tipof">Id Producto</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="id" name="id_producto" placeholder="Id Producto" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="producto" class="col-sm-2 control-label tipof">Nombre del Producto</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="producto" name="nombre_producto" placeholder="Nombre del Producto" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descripcion" class="col-sm-2 control-label tipof">Descripcion</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" maxlength="100" id="descripcion" name="descripcion" placeholder="Descripcion" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="costo" class="col-sm-2 control-label tipof">costo</label>
                            <div class="col-sm-5">
                                <input type="number" class="form-control" id="costo" name="costo" placeholder="costo" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="grupo" class="col-sm-2 control-label tipof" >Categoria</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="id_categoria">
                                    <option value="20">Tecnologia</option>
                                    <option value="30">Jugueteria</option>
                                    <option value="40">Hogar</option>
                                </select>
                            </div>  
                        </div> 
                         <button type="submit" class="btn btn-primary  tipof">Guardar</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
            
            <div class="container">
            <div class="row">
                <div class="form-group col-md-5 col-md-offset-5">              
                    <a href="Registro_productos.php" class="btn btn-primary btn-group-center tipof">Agregar otro Producto</a>
                    <a href="consulta_producto.php" class="btn btn-primary btn-group-center tipof">consultar un producto</a>
                </div> 
            </div>
            <div class="container">
                <footer class="footer">
                    <div class="row fondotitulo">
                        <div class="col-md-6 col-md-offset-4">
                            <p class="text-muted">&copy; Copyright Solange Jimenez Angel 2017</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        </div> 
          <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="javascript/crear.js"></script>
    </body>
</html>

