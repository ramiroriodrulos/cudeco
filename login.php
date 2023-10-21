<?php 
require_once('config/config.php');

//Fueron ingresados un mail y contraseña
if (!empty($_POST['mail']) || !empty($_POST['contrasena']))
{
  $mail = $_POST['mail'];
  $contrasena = $_POST['contrasena'];

  //Genero contraseña encriptada y consulto a la base de datos.
  $contraseñaEncriptada = hash ('sha512',$contrasena);

  $ArmoConsultaBD1 = " SELECT * FROM usuario WHERE mail = '$mail' AND contrasenaEncriptada = '$contraseñaEncriptada'";
  $ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
  $Resultado1 = $ConsultaBD1->fetch_assoc();

  //Existe usuario
  if(isset($Resultado1))
  {
    session_start();
    $_SESSION['nombreUsuario'] = $Resultado1['nombre'];
    $_SESSION['idUsuario'] = $Resultado1['idUsuario'];
    $idUsuario = $Resultado1['idUsuario'];

    $ArmoConsultaBD2 = " SELECT * FROM profesional WHERE idUsuario = $idUsuario";
    $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
    $Resultado2 = $ConsultaBD2->fetch_assoc();

    $_SESSION['esProfesional'] = isset($Resultado2) ? 1 : 0; // 1 = Verdadero. 0 = Falso.

    header("Location: home.php");
  }
  else
  {
    header("Location: index.php");   
  };
}
?>

