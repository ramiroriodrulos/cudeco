<?php
session_start();
require_once('validarSesion.php');
require_once('config/config.php');

$accion = $_POST ['accion'];

    //Redirección a seccion correspondiente según lo que seleccionó
    if ($accion == "anterior")
    {
        header("Location: sheet3.php");
    }
    if ($accion == "proxima")
    {
        header("Location: sheet5.php");   
    }

?>