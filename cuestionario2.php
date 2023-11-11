<?php 
session_start();
require_once('validarSesion.php');
require_once('config/config.php');

    $actual = $_SESSION ['paginaActual'];
    $ultima = $_SESSION ['ultimaPagina'];
    $accion = $_POST ['accion']; 
    
     //Hizo clic en próxima sección
    if ($accion == 'proxima')
    {
        header("Location: sheet3.php");  
    }
    else if ($accion == 'anterior')
    {
         header("Location: sheet1.php");  
    }

    //Error. Pagina no valida. Vuelvo a inicio.
    if ($actual > $ultima)
    {
        header("Location: sheet2.php?pagina=1");  
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

    //Sigo completando el formulario
    if ($accion == "atras")
    {
        $redireccion = $actual - 1;
        header("Location: sheet2.php?pagina=$redireccion");  
    }
    else if ($accion == "siguiente")
    {
        $redireccion = $actual + 1;
        header("Location: sheet2.php?pagina=$redireccion");      
    }

?>