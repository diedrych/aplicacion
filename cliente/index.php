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


    <body class="fondoSesion ">
        <br>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default ">
                        <div class="panel-heading ">
                            <h3 class="panel-title tipo"> Inicio de Sesion</h3>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control tipo" placeholder="id usuario" name="id_usuario" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control tipo" placeholder="Password" name="contraseña" type="password" value="">
                                    </div>
                                   
                                    <div class="tipoL">
                                        <input class="btn btn-lg btn btn btn-primary btn-block " type="submit" value="Login" href="consulta_producto.php">
                                    </div>           
                                    <div>
                                        <div style="float:right; font-size: 80%; position: static; top:-10px"><a href="#">Olvido la contraseña? </a></div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html>
