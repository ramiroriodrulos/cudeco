<?php 
session_start();
require_once('config/config.php');


//No es profesional de salud, no puede entrar.
if (!($_SESSION['esProfesional']))
{
    header("Location: index.php");
}

if (isset($_GET['pagina'])) {
  $pagina = $_GET['pagina'];
}
else {  
  $pagina = 1;
}

$_SESSION ['paginaActualPacientes'] = $pagina;


$idUsuario = $_SESSION['idUsuario'];

$ArmoConsultaBD2 = "SELECT idProfesional FROM profesional WHERE idUsuario = $idUsuario ";
$ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
$Resultado2 = $ConsultaBD2->fetch_assoc();

$idProfesional = $Resultado2['idProfesional'];

$ArmoConsultaBD3 =
"(SELECT u.nombre as 'NombrePadre', u.apellido as 'ApellidoPadre', u.mail ,h.nombre as 'NombreHijo',h.dni,c.fechaCompletado, c.idCuestionario
FROM cuestionario c INNER JOIN responsable r ON c.idResponsable = r.idResponsable
INNER JOIN hijo h ON c.idHijo = h.idhijo 
INNER JOIN usuario u ON r.idUsuario = u.idUsuario 
WHERE c.idProfesional = $idProfesional)

UNION

(SELECT u.nombre as 'NombrePadre', u.apellido as 'ApellidoPadre', u.mail, NULL as 'NombreHijo', NULL as 'dni',c.fechaCompletado, c.idCuestionario
FROM cuestionario c INNER JOIN responsable r ON c.idResponsable = r.idResponsable
INNER JOIN usuario u ON r.idUsuario = u.idUsuario 
WHERE c.idProfesional = $idProfesional AND c.idHijo IS NULL)";

$ConsultaBD3 = $conexion->query($ArmoConsultaBD3);
$total = mysqli_num_rows($ConsultaBD3);  
$UltimaPagina = ceil($total/4);

$_SESSION ['ultimaPaginaPacientes'] = $UltimaPagina;

if ($pagina > $UltimaPagina) 
{
header("Location: pacientes.php?pagina=1");  
}

?>

<!DOCTYPE html>
<html lang="en">
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

  <main style="height: 60vh;display: flex; justify-content: center;">

  <form action="exportar.php" method="POST">
    <div class="container" style="min-height: 50vh;">
    <button type="submit" class="btn btn-warning" style="float:right; margin:15px;">Exportar seleccion</button>
    <button type="button" class="btn btn-success" style="float:right; margin:15px;">Exportar todo</button>
    <button type="button" class="btn btn-info" style="float:right; margin:15px;" data-toggle="modal" data-target="#exampleModalCenter">Vincular usuario</button>

    <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Responsable</th>
      <th>Hijo</th>
      <th>Formulario</th>
      <th>Respuestas</th>
      <th>Seleccion</th>
    </tr>
  </thead>

  <tbody>
    <tr>
    <?php
  
      $posicion = ($pagina * 4) - 4;

      $ArmoConsultaBD4 .= $ArmoConsultaBD3 . "" . "LIMIT $posicion,4;";

      $ConsultaBD4 = $conexion->query($ArmoConsultaBD4);

      while  ($Resultado4 = $ConsultaBD4->fetch_assoc()){

      ?>
        <!-- Datos familiar/responsable -->
      <td>
        <div class="d-flex align-items-center">
          <div class="ms">
            <p class="fw-bold mb-1"><?php echo ($Resultado4['NombrePadre'] . ' ' . $Resultado4['ApellidoPadre'] )?></p>
            <p class="text-muted mb-0"><?php echo ($Resultado4['mail'])?></p>


          </div>
        </div>
      </td>

      <!-- Datos Hijo -->
      <td>
        <p class="fw-bold mb-1"><?php if (isset($Resultado4['NombreHijo'])) {echo $Resultado4['NombreHijo']; } else {echo "----";}?></p>

      <?php if (isset($Resultado4['dni'])) {echo "(DNI)" . ' ' .number_format($Resultado4['dni'], 0, ',', '.'); } else {echo "----";} ?>
      </td>

     <!-- Dato estado formulario -->
      <td>
      <?php $completado = ($Resultado4['fechaCompletado'] != NULL) ? 1 : 0 ?>
        <span class="badge <?php if($completado) { echo "badge-success";} else {echo "badge-warning";}?> rounded-pill d-inline">
          <?php 
          if($completado)
           {
            echo "Completado";
           }
           else
           {
            echo "Sin responder";           
           }
          ?>
        
        </span>
      </td>

    <!-- Enlace detalle a formulario -->
      <td>
        <button type="submit" id="verID" name="verID" value= "<?php echo ($Resultado4['idCuestionario']); ?>" class="btn btn-link btn-sm btn-rounded" <?php if (!$completado) { echo "disabled"; }?>>
          VER
        </button>
          </td>
          <td>
            
        <input type="radio" id="exportarID" name="exportarID" value= "<?php echo ($Resultado4['idCuestionario']); ?>" <?php  if(!$completado) {echo "disabled";} ?> />
      </td>

        </tr>
        <?php }?>
    <tr>
  </tbody>
</table>
    </div>

    <div class="text-center" style="margin-top: 10px;">
        <button type="submit" class="btn btn-primary btn-lg" <?php if ($pagina == 1) echo "disabled" ?> name="accion" value="atras" >Atrás</button>
        <button type="submit" class="btn btn-primary btn-lg" <?php if ($pagina == $UltimaPagina) echo "disabled" ?> name="accion" value="siguiente">Siguiente</button>
    
    
      <div class="container" style="display: flex; justify-content: center; margin-top: 0px;">
      <nav aria-label="Page navigation example">
      <ul class="pagination">

      <?php 
        for ($i = 1; $i <= $UltimaPagina; $i++) {;
        ?>
        <li class="page-item <?php if ($pagina == $i) echo "active" ?>"><a class="page-link" > <?php echo $i?> </a></li>
        <?php } ?>
        </ul>
         </nav>              
                    
    </div>
      </div>    
      
                      
      <hr>

      <?php include 'footer.php'?>
    </form>

    <form action="vincularUsuario.php" method="POST">
      <!-- Ventana vincular usuario -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Vincular usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <label for="email" class="sr-only">Ingresa el mail del usuario</label>
        <input type="email" name="mailVincular" id="mailVincular" class="form-control" placeholder="mail">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="buttom" class="btn btn-primary" class="getVal">
          <a  style = "text-decoration: none; color: inherit;">Guardar Cambios </a>
          </button>
        </div>
      </div>
    </div>
  </div>
  </form>
  </main>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script>

//Si se hace clic en 'Vincular usuario' se muestra la ventana correspondiente
    $('.getVal').click(function(){
   var value = $("mailVincular").val();
   $("#mailVincular").hide();
});
  </script>
</body>
</html>