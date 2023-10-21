<?php
session_start();

if (!isset($_SESSION['nombreUsuario']))
{
    header("Location: index.php");  

}
?>