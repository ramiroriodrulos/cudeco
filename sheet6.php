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
                <br>

                <form action="cuestionario6.php" method="POST">
                    <div class="card bg-dark text-center text-white">
                      <h3> Datos de los padres </h3>
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre1">Nombre de la Madre</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="nombre2" id="nombre1" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Edad de la Madre</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="ed2" id="nombre1" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Lugar de origen de la Madre</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="orig2" id="nombre1" placeholder="" >
                                    </div>
                             

                                    <div class="form-group">
                                        <label for="nombre1">Nombre del Padre</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="nombre3" id="nombre1" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Edad del padre</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="ed3" id="nombre1" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Lugar de origen del padre</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="orig3" id="nombre1" placeholder="" >
                                    </div>

                              <div class="form-group">
                              <label for="apellido2"> Persona que ha contestado el cuestionario </label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta7" id="flexRadioDefault25">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Madre 
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta7" id="flexRadioDefault26" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               Padre 
                              </label>
                             </div>
                            

                             <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta7" id="flexRadioDefault26" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               Otro 
                              </label>
                             </div>

                              <div class="form-group">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder="especificar otro" >
                              </div> 
                              <hr>  


                         <div class="card bg-dark text-center text-white">
                      <h3> Ocupación </h3>
                    </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <div class="form-group">
                                        <label for="nombre1"> MADRE Ocupación </label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="moc" id="nombre1" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">Breve descrición</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="mdes" id="nombre1" placeholder="" >
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre1">PADRE Ocupación</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="poc" id="nombre1" placeholder="" >
                                    </div>
                             

                                    <div class="form-group">
                                        <label for="nombre1">Breve descrición</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="pdesc" id="nombre1" placeholder="" >
                                    </div>

                                    <hr> 

                        <div class="card bg-dark text-center text-white">
                            <h3>Nivel de instrucción del Padre (Escolaridad) </h3>
                         </div>
                         <hr>

                        <div class="card-body">
                              <div class="row">
                                   <div class="col-sm-12">
                                     
                                      <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault27">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Primaria incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault28" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Primaria completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault29" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault30" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault31">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Terciario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault32" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Terciario completo
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault33">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Universitario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="pop1" id="flexRadioDefault34" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Universitario completo
                                       </label>
                                       </div>


                                      
                                   <div class="col-sm-12">                                     
                                    <hr>

                                     <div class="card bg-dark text-center text-white">
                                       <h3> Nivel de instrucción del Madre (Escolaridad) </h3>
                                      </div>
                                      <hr>
                                            
                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault35">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Primaria incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault36" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Primaria completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault37" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Incompleta
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault38" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Secundaria Completa
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault39">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Terciario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault40" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Terciario completo
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault41">
                                       <label class="form-check-label" for="flexRadioDefault1">
                                        Universitario incompleto
                                       </label>
                                       </div>

                                       <div class="form-check form-check-inline">
                                       <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="mom1" id="flexRadioDefault42" checked>
                                       <label class="form-check-label" for="flexRadioDefault2">
                                        Universitario completo
                                       </label>
                                       </div>

                                    </div>
                                                                          
                                    </div>

                        </div>
                        <hr>

                        <!-- Paginador -->
                        <div class="text-center"  style="margin-top: 10px;">
                            <button type="submit" class="btn btn-danger btn-lg" name="accion" value="anterior" >Parte anterior</button>


                            <button type="submit" class="btn btn-dark btn-lg" name="accion" value="completar" <?php if($verRespuesta) echo 'hidden' ?> >Completar</button>
                      
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