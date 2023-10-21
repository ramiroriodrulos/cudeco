<?php 
session_start();
require_once('config/config.php');
//No es profesional de salud, no puede entrar.
if (!($_SESSION['esProfesional']))
{
    header("Location: index.php");
}

$idUsuario = $_SESSION['idUsuario'];

$ArmoConsultaBD2 = "SELECT idProfesional FROM profesional WHERE idUsuario = $idUsuario ";
$ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
$Resultado2 = $ConsultaBD2->fetch_assoc();

$idProfesional = $Resultado2['idProfesional'];

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

  <main>

  <form action="exportar.php" method="POST">
    <div class="container">
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

      $ArmoConsultaBD2 =
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

      $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);


      while  ($Resultado2 = $ConsultaBD2->fetch_assoc()){

      ?>
        <!-- Datos familiar/responsable -->
      <td>
        <div class="d-flex align-items-center">
          <div class="ms">
            <p class="fw-bold mb-1"><?php echo ($Resultado2['NombrePadre'] . ' ' . $Resultado2['ApellidoPadre'] )?></p>
            <p class="text-muted mb-0"><?php echo ($Resultado2['mail'])?></p>


          </div>
        </div>
      </td>

      <!-- Datos Hijo -->
      <td>
        <p class="fw-bold mb-1"><?php if (isset($Resultado2['NombreHijo'])) {echo $Resultado2['NombreHijo']; } else {echo "----";}?></p>

      <?php if (isset($Resultado2['dni'])) {echo "(DNI)" . ' ' .number_format($Resultado2['dni'], 0, ',', '.'); } else {echo "----";} ?>
      </td>

     <!-- Dato estado formulario -->
      <td>
      <?php $completado = ($Resultado2['fechaCompletado'] != NULL) ? 1 : 0 ?>
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
        <button type="button" class="btn btn-link btn-sm btn-rounded" <?php if (!$completado) { echo "disabled"; }?>>
          VER
        </button>
          </td>
          <td>
            
        <input type="radio" id="exportarID" name="exportarID" value= "<?php echo ($Resultado2['idCuestionario']); ?>" <?php  if(!$completado) {echo "disabled";} ?> />
      </td>

        </tr>
        <?php }?>
    <tr>
  </tbody>
</table>
    </div>
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
  <?php include 'footer.php'?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script>
    $('.getVal').click(function(){
   var value = $("mailVincular").val();
   $("#mailVincular").hide();
});
  </script>
</body>
</html>