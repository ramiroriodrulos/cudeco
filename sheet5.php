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

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                    <form action="cuestionario5.php" method="POST">
                        <div class="card bg-dark text-center text-white">
                            <h3>Contacto con otras lenguas  </h3>
                         </div>
                         <hr>

                         <div class="form-group">
                              <label for="apellido2">¿El niño/a tiene contacto con lenguas que no sea el español?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="otrasl" id="flexRadioDefault14">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="otrasl" id="flexRadioDefault15" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                                                                      
                                       
                                       <div class="form-group">
                                        <label for="apellido1">¿Con qué lenguas tiene contacto?</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder="detallar" >
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">¿Desde que edad?</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="VecesXsemana" id="apellido1" placeholder="Ingrese número" >
                                       </div>  

                                       <div class="form-group">
                                        <label for="apellido1">¿Con quienes las habla ?</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="VecesXsemana" id="apellido1" placeholder="detallar" >
                                       </div>  
                                       <hr>
                                
                         <div class="card bg-dark text-center text-white">
                            <h3>Salud </h3>
                         </div>
                         <hr>

                         <div class="form-group">
                              <label for="apellido2">¿Nació antes de los nueve meses?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta2" id="flexRadioDefault16">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta2" id="flexRadioDefault17" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                                       <div class="form-group">
                                        <label for="apellido1">¿Con cuántas semanas de gestación?</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="sem2" id="apellido1" placeholder=" ingrese numero" >
                                       </div>

                                       <div class="form-group">
                                        <label for="apellido1">¿Cuánto peso al nacer?</label>
                                        <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="pes" id="apellido1" placeholder="Ingrese número" >
                                       </div>  


                            <div class="form-group">
                              <label for="apellido2">¿Tuvo alguna enfermedad al nacer, problema de audición o lenguaje?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta3" id="flexRadioDefault18">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta3" id="flexRadioDefault19" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                              <div class="form-group">
                              <label for="apellido1">Describir el problema</label>
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="desc1" id="apellido1" placeholder=" Texto" >
                              </div>             
               
                            
                           <div class="form-group">
                              <label for="apellido2">¿Ha sufrido infecciones en el oído ?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta4" id="flexRadioDefault20">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta4" id="flexRadioDefault21" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                              <div class="form-group">
                              <label for="apellido1">¿Cuantas por año ? </label>
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder=" Texto" >
                              </div> 

                           <div class="form-group">
                              <label for="apellido2"> ¿Ha tenido problemas de salud importante antes, durante o despues del nacimiento ?</label>                                                                        </div>
                                                                      
                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta5" id="flexRadioDefault22">
                              <label class="form-check-label" for="flexRadioDefault1">
                               Si
                              </label>
                              </div>

                              <div class="form-check form-check-inline">
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> class="form-check-input" type="radio" name="rta5" id="flexRadioDefault23" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                               No
                              </label>
                             </div>
                            
                              <div class="form-group">
                              <label for="apellido1">Describir el problema  </label>
                              <input <?php if ($verRespuesta) echo 'disabled'; ?> type="text" class="form-control" name="HorasXdia" id="apellido1" placeholder=" Texto" >
                              </div> 
                              <hr>

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