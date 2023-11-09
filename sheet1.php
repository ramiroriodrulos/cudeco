<?php 
session_start();
require_once('validarSesion.php');
require_once('config/config.php');

$verRespuesta = false;

//Es profesional y no accedió desde el boton VER en 'mis pacientes', no puede entrar.
if ($_SESSION['esProfesional'] && !isset($_SESSION['idCuestionario']))
{
    header("Location: index.php");
}

//Es profesional y accedió desde el boton VER en 'mis pacientes', puede entrar.
if ($_SESSION['esProfesional'] && isset($_SESSION['idCuestionario']))
{
    $verRespuesta = true;

    $idCuestionario = $_SESSION['idCuestionario'];
    $ArmoConsultaBD1 = "SELECT h.nombre,h.dni, h.sexo, h.fechaNacimiento FROM cuestionario c INNER JOIN hijo h on c.idHijo = h.idhijo WHERE c.idCuestionario = $idCuestionario;";
    $ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
    $Resultado1 = $ConsultaBD1->fetch_assoc();

    $nombre = $Resultado1["nombre"];
    $dni = $Resultado1["dni"];
    $fechaNacimiento = $Resultado1["fechaNacimiento"];
    $sexo = $Resultado1["sexo"];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cudeco</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="icon" href="favicon.ico" type="image/ico">
</head>

<body>
   
<?php include 'header.php'?>

    <section class="content" style="height: 60vh;display: flex; align-items: center; justify-content: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 p-2">
                    <div class="card bg-danger text-center text-white">
                        <h3>Datos hijo/a</h3>
                    </div>
                    <form action="registrohijo.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre">Nombre del niño o niña</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" required <?php if($verRespuesta){ echo " value=$nombre disabled";}?>>
                                    </div>

                                    <div class="form-group">
                                        <label for="dni">Número de identificación</label>
                                        <input type="text" class="form-control" name="dni" id="dni" placeholder="" <?php if($verRespuesta){ echo " value=$dni disabled";}?> >
                                    </div>
                                    
                                    <span>Sexo</span>
                                    <select class="form-select" name="sexo" <?php if($verRespuesta){ echo "disabled";}?>>
                                    <option selected><?php if($verRespuesta){ echo "$sexo";}else{ echo "Selecciona";}?></option>
                                    <option name="sexo" id="sexo" value="Masculino">Masculino</option>
                                    <option name="sexo" id="sexo" value="Femenino">Femenino</option>
                                    </select>

                                    <div class="form-group">
                                        <label for="nacimiento">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="nacimiento" id="nacimiento" placeholder="" <?php if($verRespuesta){ echo " value=$fechaNacimiento disabled";}?>>
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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
