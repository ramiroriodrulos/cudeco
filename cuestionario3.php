<?php 
session_start();
require_once('validarSesion.php');
require_once('config/config.php');

    //Parte 1 sección B   

    $accion = $_POST ['accion'];
    $ultima = $_SESSION ['ultimaPagina'];
    $idCuestionarioPaciente = $_SESSION['idCuestionarioPaciente'];
    
    //Guardo las respuestas en la memoria local del navegador

    //Valido cantidad de preguntas existentes en la base de datos
    $ArmoConsultaBD1 = "SELECT COUNT(idPregunta) as 'cantidad' FROM pregunta";
    $ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
    $Resultado1 = $ConsultaBD1->fetch_assoc();
    $maxPreguntas = $Resultado1['cantidad'];

    //Valido cantidad de opciones unicas existentes en la base de datos
    $ArmoConsultaBD2 = "SELECT COUNT(idOpcionUnica) as 'cantidad' FROM opcionUnica";
    $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
    $Resultado2 = $ConsultaBD2->fetch_assoc();
    $maxOpcionUnica = $Resultado2['cantidad'];

    for ($idPreg = 1; $idPreg <= $maxPreguntas; $idPreg++) 
    {

        $posicion = ("ou" . strval($idPreg));

        for ($idOpcionU = 1; $idOpcionU <= $maxOpcionUnica; $idOpcionU++)
        {  
            $nombre = strval("ou" . $idPreg . $idOpcionU);

            if (isset($_POST[$posicion]))
            {
                if ( $_POST[$posicion] == $idOpcionU)
                {
                    $_SESSION [$nombre] = 1; 
                }
                else
                {
                    $_SESSION [$nombre] = 0;
                }
            }
            else
            {
                $_SESSION [$nombre] = 0;           
            }

        }

    };

    //Redirección a seccion correspondiente según lo que seleccionó
    if ($accion == "anterior")
    {
        header("Location: sheet2.php?pagina=$ultima");
    }
    if ($accion == "proxima")
    {
        header("Location: sheet4.php");   
    }

?>