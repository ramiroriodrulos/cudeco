<?php 
session_start();
require_once('validarSesion.php');
require_once('config/config.php');

//Respuestas. Registro
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$nacimiento = $_POST['nacimiento'];
$dni = $_POST['dni'];

//Calculos auxiliares
$hoy = date('d-m-Y');
$d1=new DateTime($hoy); 
$d2=new DateTime($nacimiento);                                  
$Meses = $d2->diff($d1); 
$edadMeses = (($Meses->y) * 12) + ($Meses->m);

//Inserto hijo
$ArmoConsultaBD1 = "INSERT INTO hijo (idhijo,fechaNacimiento,edadMeses,nombre,dni) VALUES (NULL, '$nacimiento' , $edadMeses , '$nombre', $dni) ";
$ConsultaBD1 = $conexion->query($ArmoConsultaBD1);

//Actualizo hijo en los datos del cuestionario
$ArmoConsultaBD2 = "SELECT idhijo FROM hijo ORDER BY idhijo DESC; ";
$ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
$Resultado2 = $ConsultaBD2->fetch_assoc();
$idHijo = $Resultado2['idhijo'];

$ArmoConsultaBD3 = "SELECT idResponsable FROM responsable INNER JOIN usuario ON responsable.idUsuario = '{$_SESSION['idUsuario']}' LIMIT 1";
$ConsultaBD3 = $conexion->query($ArmoConsultaBD3);
$Resultado3 = $ConsultaBD3->fetch_assoc();
$idResponsable = $Resultado3['idResponsable'];

$ArmoConsultaBD4 = "SELECT idCuestionario FROM cuestionario WHERE idResponsable = $idResponsable  LIMIT 1";
$ConsultaBD4 = $conexion->query($ArmoConsultaBD4);
$Resultado4 = $ConsultaBD4->fetch_assoc();
$idCuestionario = $Resultado4['idCuestionario'];

$ArmoConsultaBD5 = "UPDATE cuestionario SET idHijo = $idHijo WHERE cuestionario.idCuestionario = $idCuestionario";
$ConsultaBD5 = $conexion->query($ArmoConsultaBD5);

header("Location: sheet2.php");  
?>