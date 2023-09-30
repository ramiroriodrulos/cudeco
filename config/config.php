<?php
$host = "localhost:3306";
$user = "root";
$password = "";
$db = "cudeco";

$conexion = new mysqli($host, $user, $password, $db);

if ($conexion->connect_errno){

    echo "Fallo la conexion a la base de datos: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
?>