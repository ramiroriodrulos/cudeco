<?php
session_start();
require_once('validarSesion.php');
require_once('config/config.php');


$verRespuesta = false;

//Es profesional y no accedió desde el boton VER en 'mis pacientes', no puede entrar.
if ($_SESSION['esProfesional'] && !isset($_SESSION['idCuestionario']))
{
    header("Location: home.php");
}

//Es profesional y accedió desde el boton VER en 'mis pacientes', puede entrar.
if ($_SESSION['esProfesional'] && isset($_SESSION['idCuestionario']))
{
  $verRespuesta = true;
  $idCuestionario = $_SESSION['idCuestionario'];
  $nombreResponsable = $_SESSION['NombreApellidoResponsable'];
  $nombreHijo = $_SESSION['NombreHijo'];

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
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/ico">
</head>

<Style>
  @media screen and (max-width: 1000px) {
    .infoCuestionario {
        display: none !important;
    }
}
</Style>

<body>
   
<?php include 'header.php'?>

    <section class="content">

    <?php if ($verRespuesta) : ?>
                      <div class="infoCuestionario">
                      <div class="card bg-dark text-white mb-3" style="width: 15vw; float: right; position: absolute; margin: 15px;">
                      <div class="card-body ">
                      <h5 class="card-title"><strong>Respuestas</strong></h5>
                      <br>
                      <h5 class="card-title"> <?php echo $_SESSION['NombreApellidoResponsable'] ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Responsable</h6>
                      <h5 class="card-title"><?php echo $_SESSION['NombreHijo']  ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Hijo/a</h6>      
                      <br>               
                        <a href="pacientes.php" class="btn btn-light text-center">Volver a mis pacientes</a>
                      </div>
                    </div>
                    </div>
<?php endif;?>
        <div class="container">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 p-2">
                <div class="card bg-danger text-center text-white">
                        <h3>Información general</h3>
                </div>
                <form action="cuestionario4.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>

                                    <div class="card bg-dark text-center text-white">
                                    <h3>Datos del niño/a  </h3>
                                   </div>

                                    <div class="form-group">
                                        <label for="apellido2">Lugar de nacimiento</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="nac1" id="nac1" placeholder="ciudad">
                                    </div>

                                    <div class="form-group">
                                        <label for="documento">¿Cuantos niños hay en tu familia? </label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="number" class="form-control" name="nin1" id="nin1" placeholder="número"  >
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido2">¿Quienes viven con el niño/a?</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="conv1" id="conv1" placeholder="describir">
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido2">Orden de nacimiento del niño</label>                                        
                                    </div>
                                                                      
                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="ord1" id="flexRadioDefault1">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Primero
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="ord1" id="flexRadioDefault2" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Segundo
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="ord1" id="flexRadioDefault3" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Tercero
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="ord1" id="flexRadioDefault4" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Otro
                                       </label>
                                       </div>


                                    <div class="form-group">
                                        <label for="apellido2">¿Con quien pasa el niño la mayor parte del día ?</label>                                        
                                    </div>
                                                                      
                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="fam1" id="flexRadioDefault5">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Mama 
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="fam1" id="flexRadioDefault6" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Papa 
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="fam1" id="flexRadioDefault7" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Abuelo/a
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="fam1" id="flexRadioDefault8" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Otro
                                       </label>
                                       </div>

                                     <div class="form-group">
                                        <label for="apellido2">Si asiste a una guardería, ¿hace cuanto?</label>  
                                     </div>
                                                                      
                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="time1" id="flexRadioDefault11">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Hace menos de 6 meses
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="time1" id="flexRadioDefault12" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Hace más de 6 meses
                                       </label>
                                       </div>
                                     
                                     <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="time1" id="flexRadioDefault13" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Mas de una año
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="time1" id="flexRadioDefault13" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Mas de una año
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="time1" id="flexRadioDefault13" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        No asiste
                                       </label>
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">Horas al dia</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="number" class="form-control" name="HorasXdia" id="hr" placeholder="Ingrese un número"   >
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">Veces por semana </label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="number" class="form-control" name="VecesXsemana" id="VxS" placeholder="Ingrese un número"   >
                                       </div>
                                       <hr>
                               

                                </div>
                            </div>
                        <!-- Paginador -->
                        <div class="text-center"  style="margin-top: 10px;">
                            <button type="submit" class="btn btn-danger btn-lg" name="accion" value="anterior" >Parte anterior</button>

                            <button type="submit" class="btn btn-danger btn-lg" name="accion" value="proxima">Próxima parte</button>
                      
                          <hr>
                            <div class="container" style="display: flex; justify-content: center;">
                
                      <!-- Fin paginador  -->

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