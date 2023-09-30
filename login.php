<?php 
require_once('config/config.php');

$mail = $_POST['mail'];
$contrasena = $_POST['contrasena'];

//Fueron ingresados un mail y contraseña
if (isset($mail) || !empty(trim($mail)))
{
  //Genero contraseña encriptada y consulto a la base de datos.
  $contrasenaConSal = "456y45rghtrhfgrhywsetr".$contrasena."fdgfdsgsfgd";
  $contraseñaEncriptada = hash ('sha512',$contrasenaConSal);

  $consultaBaseDatos = " SELECT * FROM usuario WHERE mail = '$mail' AND contrasenaHash = '$contraseñaEncriptada'";
  $resultado = $conexion->query($consultaBaseDatos);
  $resultadoVector = $resultado->fetch_assoc();

  //Existe usuario
  if ($resultado->num_rows > 0)
  {
    session_start();
    $_SESSION['nombre'] = $resultadoVector['nombre'];
    $_SESSION['idUsuario'] = $resultadoVector['idUsuario'];

    header("Location: sheet1.php");
    exit;
  }
  else
  {
    header("Location: index.php");   
  };
}
?>

