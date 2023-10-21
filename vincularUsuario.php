<?php
session_start();
require_once('config/config.php');

$mail = $_POST['mailVincular'];

//Valido que exista mail y sea de un responsable/familiar
$ArmoConsultaBD1 = 
"SELECT r.idUsuario as 'idUsuarioVincular', r.idResponsable as 'idResponsableVincular' FROM usuario u
INNER JOIN responsable r ON u.idUsuario = r.idUsuario
WHERE mail = '$mail'; ";
$ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
$Resultado1 = $ConsultaBD1->fetch_assoc();

//No cumple condicion vuelvo atras
if(!isset($Resultado1))
{
    header("Location: pacientes.php");   
}

//Cumple condicion. Creo formulario vacio
$idUsuarioVincular = $Resultado1['idUsuarioVincular'];
$idResponsableVincular = $Resultado1['idResponsableVincular'];
$idUsuarioProfesional = $_SESSION['idUsuario'];

$ArmoConsultaBD2 = "SELECT idProfesional FROM profesional WHERE idUsuario = $idUsuarioProfesional ";
$ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
$Resultado2 = $ConsultaBD2->fetch_assoc();

$idProfesional = $Resultado2['idProfesional'];

$ArmoConsultaBD3 = "SELECT idCuestionario FROM cuestionario WHERE idResponsable = $idResponsableVincular AND  idProfesional= $idProfesional ";
$ConsultaBD3 = $conexion->query($ArmoConsultaBD3);
$Resultado3 = $ConsultaBD3->fetch_assoc();

//Ya existe relacion, vuelvo atras
if(!isset($Resultado3))
{
    header("Location: pacientes.php");   
}

$fechaConHora = new DateTime("now", new DateTimeZone('America/Argentina/Buenos_Aires'));
$fechaHoy = $fechaConHora->format('Y-m-d');

$ArmoConsultaBD4 = "INSERT INTO cuestionario (idCuestionario,idResponsable,idProfesional,fechaCreado,fechaCompletado,idHijo) VALUES (NULL,$idResponsableVincular,$idProfesional,'$fechaHoy',NULL,NULL)";

$ConsultaBD4 = $conexion->query($ArmoConsultaBD4);
$Resultado4 = $ConsultaBD4->fetch_assoc();

header("Location: pacientes.php");   

?>