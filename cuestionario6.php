<?php
session_start();
require_once('validarSesion.php');
require_once('config/config.php');

$accion = $_POST ['accion'];
$idCuestionarioPaciente = $_SESSION['idCuestionarioPaciente'];

    //Redirección a seccion correspondiente según lo que seleccionó
    if ($accion == "anterior")
    {
        header("Location: sheet5.php");
    }
    if ($accion == "completar")
    {
  
            //Formulario completado, persisto en la base de datos

            //Obtengo ID del cuestionario del usuario
            $ArmoConsultaBD2 = "SELECT idResponsable FROM responsable INNER JOIN usuario ON responsable.idUsuario = '{$_SESSION['idUsuario']}' LIMIT 1";
            $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
            $Resultado2 = $ConsultaBD2->fetch_assoc();
            $idResponsable = $Resultado2['idResponsable'];

            $ArmoConsultaBD3 = "SELECT idCuestionario FROM cuestionario WHERE idResponsable = $idResponsable  LIMIT 1";
            $ConsultaBD3 = $conexion->query($ArmoConsultaBD3);
            $Resultado3 = $ConsultaBD3->fetch_assoc();
            $idCuestionario = $Resultado3['idCuestionario'];

            //GUARDO RESPUESTAS - Parte 1 sección A

            //Valido cantidad de opciones existentes en la base de datos
            $ArmoConsultaBD4 = "SELECT COUNT(idOpcion) as 'cantidad' FROM opcion";
            $ConsultaBD4 = $conexion->query($ArmoConsultaBD4);
            $Resultado4 = $ConsultaBD4->fetch_assoc();
            $max = $Resultado4['cantidad'];

            //Inserto la respuesta que cada opcion en la base de datos
            $ArmoConsultaBD5 = "INSERT INTO ParteUnoRespuestaSeccionA (idParteUnoRespuestaSeccionA, idCuestionario, idOpcion, seleccionada) VALUES ";

            for ($i = 1; $i <= $max; $i++) {
                $idOpcion = ("o" . strval($i));
                $seleccionada =(isset($_SESSION[$idOpcion]) ? $_SESSION[$idOpcion] : 0) ; //Si no encuentra el valor en las variables globales, lo setea en 0.

                if ($i == $max) //Es el ultimo registro
                {
                    $ArmoConsultaBD5 .= " (NULL, $idCuestionario, $i, $seleccionada) ";
                }
                else
                {
                    $ArmoConsultaBD5 .= " (NULL, $idCuestionario, $i, $seleccionada),";
                }
            }

            $conexion->query($ArmoConsultaBD5);

            //GUARDO RESPUESTAS - Parte 1 sección B

            // //Inserto opciones en tabla intermedia, si es que no existian antes.  
            // $ArmoConsultaBD8 = "";
            // for ($idPregunta = 1; $idPregunta <= $maxPreguntas; $idPregunta++) {
                
            //     for ($idOpcionUnica = 1; $idOpcionUnica <= $maxOpcionUnica; $idOpcionUnica++) {

            //         $ArmoConsultaBD8 .= " INSERT INTO preguntaOpciones SELECT NULL,$idPregunta,$idOpcionUnica
            //         WHERE 0 IN (SELECT count(*) FROM preguntaOpciones WHERE idPregunta = $idPregunta AND idOpcionUnica = $idOpcionUnica); ";
                    
            //     }   
            // }
            
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


            //Inserto la respuestas
             $ArmoConsultaBD9 = "INSERT INTO ParteUnoRespuestaSeccionB (idParteUnoRespuestaSeccionB, idCuestionario, idPreguntaOpcion, seleccionada) VALUES ";

            for ($idPregunta = 1; $idPregunta <= $maxPreguntas; $idPregunta++) {

                for ($idOpcionUnica = 1; $idOpcionUnica <= $maxOpcionUnica; $idOpcionUnica++) {
                
                    $idOpcionSesion = ("ou" . $idPregunta . $idOpcionUnica );
                
                    $seleccion =($_SESSION[$idOpcionSesion]) ; //Si no encuentra el valor en las variables globales, lo setea en 0.

                    //Consulto ID de la tabla intermedia
                    $ArmoConsultaBD10 = "SELECT idPreguntaOpciones FROM preguntaOpciones WHERE idPregunta = $idPregunta AND idOpcionUnica = $idOpcionUnica LIMIT 1;";
                    $ConsultaBD10 = $conexion->query($ArmoConsultaBD10);
                    $Resultado10 = $ConsultaBD10->fetch_assoc();
                    $idPreguntaOpciones = $Resultado10['idPreguntaOpciones'];

                
                    //Guardo en una variable el insert para luego correr la consulta.
                    if (($idOpcionUnica == $maxOpcionUnica) && ($idPregunta == $maxPreguntas)) //Es el ultimo registro
                    {
                        $ArmoConsultaBD9 .= " (NULL, $idCuestionarioPaciente, $idPreguntaOpciones , $seleccion) ";
                    }
                    else
                    {
                        $ArmoConsultaBD9 .= " (NULL, $idCuestionarioPaciente, $idPreguntaOpciones, $seleccion),";
                    }
                    
                }
            }
 
            $conexion->query($ArmoConsultaBD9);

        //Marco cuestionario como completado 
        $fechaConHora = new DateTime("now", new DateTimeZone('America/Argentina/Buenos_Aires'));
        $fechaHoy = $fechaConHora->format('Y-m-d');

        $ArmoConsultaBD6 = "UPDATE cuestionario SET fechaCompletado = '$fechaHoy' ";
        $ConsultaBD6 = $conexion->query($ArmoConsultaBD6);

        header("Location: home.php");
    }

?>