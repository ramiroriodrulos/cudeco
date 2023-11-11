<?php 
session_start();
require_once('config/config.php');

if (!$_SESSION['esProfesional'])
{
  $habilitado = 1;
  $completado = 1;

  $idUsuario = $_SESSION['idUsuario'];
  
  $ArmoConsultaBD1 = "SELECT idResponsable FROM responsable INNER JOIN usuario ON responsable.idUsuario = $idUsuario LIMIT 1";
  $ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
  $Resultado1 = $ConsultaBD1->fetch_assoc();
  $idResponsable = $Resultado1['idResponsable'];
  
  $ArmoConsultaBD2 = "SELECT idCuestionario,fechaCompletado FROM cuestionario WHERE idResponsable = $idResponsable";
  $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
  $Resultado2 = $ConsultaBD2->fetch_assoc();
  
  if(!isset($Resultado2))
  {
    $habilitado = 0;
  }


  if(!isset($Resultado2['fechaCompletado']))
  {
    $completado = 0;
  }

  $_SESSION['idCuestionarioPaciente'] = $Resultado2['idCuestionario'];

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

  <main style="height: 60vh;display: flex; align-items: center; justify-content: center;">
  <div class="text-center">
      <p>
        <h1>Hola, <?php print_r($_SESSION['nombreUsuario'])?>. </h1>
        <p><p><p>
        <!-- Es profesional -->
        <?php if ($_SESSION['esProfesional']){?>
        <button type="submit" class="btn btn-dark btn-lg"> <a href="pacientes.php" style = "text-decoration: none; color: inherit;">Mis pacientes </a></button>
        <?php }?>
         <!-- Es familiar/responsable -->
        <?php if (!$_SESSION['esProfesional'] && $completado){?>
          <h2>Completaste el formulario. ¡Gracias!</h2>

        <?php } else if (!$_SESSION['esProfesional'] && $habilitado){?>
          <button type="submit" class="btn btn-info btn-lg"> <a href="sheet1.php" style = "text-decoration: none; color: inherit;">Ir a formulario </a></button>


        <?php } else if(!$_SESSION['esProfesional'] && !$habilitado){?>
        <button type="buttom" class="btn btn-danger btn-lg">No hay formularios habilitados</button>
        <?php }?>
    </div>    

  </main>
  <?php include 'footer.php'?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>