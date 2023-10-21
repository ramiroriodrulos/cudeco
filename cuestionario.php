<?php 
session_start();
require_once('config/config.php');

    $actual = $_SESSION ['paginaActual'];
    $ultima = $_SESSION ['ultimaPagina'];
    $accion = $_POST ['accion']; 
    
    //Error. Pagina no valida. Vuelvo a inicio.
    if ($actual > $ultima)
    {
        header("Location: sheet2.php?page=1");  
    }

    //Obtengo los IDs de las opciones que pertenecen a la pagina en la que estoy parado
    $ArmoConsultaBD1 = "SELECT idOpcion FROM opcion WHERE idCategoria IN (SELECT idCategoria FROM categoria WHERE pagina = $actual) ORDER BY idOpcion ASC";
    $ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
    $Resultado1 = $ConsultaBD1->fetch_assoc();

    $ConsultaBD1->data_seek(0);
    $primerID = $ConsultaBD1->fetch_assoc();
    $desde = $primerID['idOpcion'];

    $ConsultaBD1->data_seek($ConsultaBD1->num_rows - 1);
    $ultimoID = $ConsultaBD1->fetch_assoc();
    $hasta = $ultimoID['idOpcion'];

    //Guardo las respuestas en la memoria local del navegador
    for ($i = $desde; $i <= $hasta; $i++) 
    {
        $posicion = ("o" . strval($i));
        $seleccionada =(isset($_POST[$posicion]) ? 1 : 0) ; //1 = seleccionada (true). 0 = no seleccionada (false)
        $_SESSION [$posicion] = $seleccionada;
    };

    //Sigo compleando el formulario
    if ($accion == "atras")
    {
        $redireccion = $actual - 1;
        header("Location: sheet2.php?page=$redireccion");  
    }
    else if ($accion == "siguiente")
    {
        $redireccion = $actual + 1;
        header("Location: sheet2.php?page=$redireccion");      
    }

    //Formulario completado, persisto en la base de datos
    else if ($accion == "completar") 
    {


        //Obtengo ID del cuestionario del usuario
        $ArmoConsultaBD2 = "SELECT idResponsable FROM responsable INNER JOIN usuario ON responsable.idUsuario = '{$_SESSION['idUsuario']}' LIMIT 1";
        $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
        $Resultado2 = $ConsultaBD2->fetch_assoc();
        $idResponsable = $Resultado2['idResponsable'];

        $ArmoConsultaBD3 = "SELECT idCuestionario FROM cuestionario WHERE idResponsable = $idResponsable  LIMIT 1";
        $ConsultaBD3 = $conexion->query($ArmoConsultaBD3);
        $Resultado3 = $ConsultaBD3->fetch_assoc();
        $idCuestionario = $Resultado3['idCuestionario'];

        //Valido cantidad de opciones existentes en la base de datos
        $ArmoConsultaBD4 = "SELECT COUNT(idOpcion) as 'cantidad' FROM opcion";
        $ConsultaBD4 = $conexion->query($ArmoConsultaBD4);
        $Resultado4 = $ConsultaBD4->fetch_assoc();
        $max = $Resultado4['cantidad'];

        //Inserto la respuesta que cada opcion en la base de datos
        $ArmoConsultaBD5 = "INSERT INTO RespuestaSeccionA (idRespuestaSeccionA, idCuestionario, idOpcion, seleccionada) VALUES ";

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

        //Marco cuestionario como completado 

        $fechaConHora = new DateTime("now", new DateTimeZone('America/Argentina/Buenos_Aires'));
        $fechaHoy = $fechaConHora->format('Y-m-d');

        $ArmoConsultaBD6 = "UPDATE cuestionario SET fechaCompletado = '$fechaHoy' ";
        $ConsultaBD6 = $conexion->query($ArmoConsultaBD6);

        header("Location: home.php");  
    }
?>