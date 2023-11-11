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

$UltimaPagina = 1;
$pagina = 1;

$ArmoConsultaBD1 = "SELECT idOpcionUnica, nombre FROM opcionUnica;";
$ConsultaBD1 = $conexion->query($ArmoConsultaBD1);

$ArmoConsultaBD2 = "SELECT detalle, idPregunta FROM pregunta;";
$ConsultaBD2 = $conexion->query($ArmoConsultaBD2);


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

    <!-- Contendor formulario -->
    <div class="row">
    <div class="col-md-2"></div>
                <div class="col-md-8 p-2">
                <div class="card bg-danger text-center text-white">
                        <h3>1ª Parte B. El uso de las palabras</h3>
                    </div>

                    <br>
                    <div class="card bg-info text-center text-white">
                    <h5>¿Cómo  usa  y  comprende  el  lenguaje?</h5>
                    </div>


                    <form action="cuestionario3.php" method="POST">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>

                            <th>Pregunta</th>
                            <?php
                            while  ($Resultado1 = $ConsultaBD1->fetch_assoc()){
                            ?>
                            <th><?php echo $Resultado1['nombre']; ?></th>
                       
                            <?php } ?>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>

                            <!-- Preguntas-->
                            <?php
                            while  ($Resultado2 = $ConsultaBD2->fetch_assoc()){
                            ?>
                            
                            <td>
                            <p class="fw-bold mb-1"><?php echo $Resultado2['detalle']; ?></p>
                            </td>
                            <!-- Fin -->

                            <!-- Selecciones-->
                            <?php
                            $ConsultaBD3 = $conexion->query($ArmoConsultaBD1);
                            while  ($Resultado3 = $ConsultaBD3->fetch_assoc()){
                            ?>
                            <td>    
                            <?php $idPregunta = $Resultado2['idPregunta']; $idOpcionU = $Resultado3['idOpcionUnica']; $nombre = strval("ou" . $idPregunta . $idOpcionU) ?>

                            <!-- Es responsable/familiar, muestro opciones para completar  -->
                            <?php if (!$verRespuesta) :?>
                            <input type="radio"  name="ou<?php echo $idPregunta ?>" value= "<?php echo $idOpcionU ?>"                    
                            <?php if($_SESSION[$nombre]) echo " checked" ?>  />
                            <?php endif;?>
                            
                            <!-- Es profesional, muestro las opciones respondidas de un paciente en especifico -->
                            <?php if ($verRespuesta) :
                                $idOpcion = $Resultado2['idOpcion'];
                                $ArmoConsultaBD4 = "SELECT r.seleccionada FROM ParteUnoRespuestaSeccionB r 
                                                    INNER JOIN preguntaOpciones o on r.idPreguntaOpcion = o.idPreguntaOpciones 
                                                    WHERE r.idCuestionario = $idCuestionario AND o.idOpcionUnica = $idOpcionU AND o.idPregunta = $idPregunta;";
                                $ConsultaBD4 = $conexion->query($ArmoConsultaBD4); 
                                $Resultado4 = $ConsultaBD4->fetch_assoc();
                            ?>
                            <input type="radio" <?php if( $Resultado4['seleccionada'] == 1) { echo "checked";} else { echo "disabled";} ?> >
                            
                            <?php endif;?>
                            </td>
                            <!-- Fin -->

                            <?php } ?>

                            </tr>
                                <?php } ?>
                            <tr>
                        </tbody>
                        </table>

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
    <!-- Fin contenedor -->
</div>
  </div>

<?php include 'footer.php'?>
</section>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</script>
</body>

</html>