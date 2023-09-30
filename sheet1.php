<?php 
session_start();
require_once('validarSesion.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cudeco</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="favicon.ico" type="image/ico">
</head>

<body>
   
<?php include 'header.php'?>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 p-2">
                    <div class="card bg-danger text-center text-white">
                        <h3>Registro</h3>
                    </div>
                    <form action="registro.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre">Nombre del niño o niña</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="dni">Número de identificación</label>
                                        <input type="text" class="form-control" name="dni" id="dni" placeholder="">
                                    </div>
                                    
                                    <span>Sexo</span>
                                    <select class="form-select" name="sexo">
                                    <option selected>Selecciona</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Femenino</option>
                                    </select>

                                    <div class="form-group">
                                        <label for="nacimiento">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="nacimiento" id="nacimiento" placeholder="">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-danger btn-lg">Continuar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
