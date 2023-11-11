<?php
session_start();
require_once('validarSesion.php');
require_once('config/config.php');

$accion = $_POST ['accion'];

    //Redirección a seccion correspondiente según lo que seleccionó
    if ($accion == "anterior")
    {
        header("Location: sheet4.php");
    }
    if ($accion == "proxima")
    {
        header("Location: sheet6.php");   
    }

?>