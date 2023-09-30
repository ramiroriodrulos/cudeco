<?php 
session_start();
require_once('config/config.php');

//Respuestas. 1ra parte - Sec. A - Sonidos de cosas y animales.
$am =(isset($_POST['am']) ? "1" : "0") ;
$cuacua =(isset($_POST['cuacua']) ? "1" : "0") ;
$muu =(isset($_POST['muu']) ? "1" : "0") ;
$quiquiriqui =(isset($_POST['quiquiriqui']) ? "1" : "0") ;
$ay =(isset($_POST['ay']) ? "1" : "0") ;
$guauguaubabau =(isset($_POST['guauguaubabau']) ? "1" : "0") ;
$piopio =(isset($_POST['piopio']) ? "1" : "0") ;
$rumrum =(isset($_POST['rumrum']) ? "1" : "0") ;
$beemee =(isset($_POST['beemee'] ) ? "1" : "0") ;
$miau =(isset($_POST['miau'])? "1" : "0") ;
$pum = (isset($_POST['pum']) ? "1" : "0") ;
$tutu = (isset($_POST['tutu']) ? "1" : "0") ;

//Obtengo ID del cuestionario del usuario
$ArmoConsultaBD1 = "SELECT idResponsable FROM responsable INNER JOIN usuario ON responsable.idUsuario = '{$_SESSION['idUsuario']}' LIMIT 1";
$ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
$Resultado1 = $ConsultaBD1->fetch_assoc();
$idResponsable = $Resultado1['idResponsable'];

$ArmoConsultaBD2 = "SELECT idCuestionario FROM cuestionario WHERE idResponsable = $idResponsable  LIMIT 1";
$ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
$Resultado2 = $ConsultaBD2->fetch_assoc();
$idCuestionario = $Resultado2['idCuestionario'];

//Inserto datos
$ArmoConsultaBD3 = 
" INSERT INTO seccionA (idSeccionA,idCuestionario,idOpcion,seleccionada,idSubseccion) 
VALUES 
(NULL, $idCuestionario, '1', $am, '1'),
(NULL, $idCuestionario, '2', $cuacua, '1'),
(NULL, $idCuestionario, '3', $muu, '1'),
(NULL, $idCuestionario, '4', $quiquiriqui, '1'),
(NULL, $idCuestionario, '5', $ay, '1'),
(NULL, $idCuestionario, '6', $guauguaubabau, '1'),
(NULL, $idCuestionario, '7', $piopio, '1'),
(NULL, $idCuestionario, '8', $rumrum, '1'),
(NULL, $idCuestionario, '9', $beemee, '1'),
(NULL, $idCuestionario, '10', $miau, '1'),
(NULL, $idCuestionario, '11', $pum, '1'),
(NULL, $idCuestionario, '12', $tutu, '1')
 ";

$ConsultaBD3 = $conexion->query($ArmoConsultaBD3);

header("Location: index.php");  
?>