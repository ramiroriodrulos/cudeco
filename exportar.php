<?php 
session_start();
require_once('config/config.php');

include('vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;

//Hizo clic en paginacion, no desea exportar ni ver respuestas
if (!isset($_POST['verID']))
{
    $actual = $_SESSION ['paginaActualPacientes'];
    $ultima = $_SESSION ['ultimaPaginaPacientes'];
    $accion = $_POST ['accion']; 

    print_r($accion);
    
    //Error. Pagina no valida. Vuelvo a inicio.
    if ($actual > $ultima)
    {
        header("Location: pacientes.php?pagina=1");  
    }

    //Sigo completando el formulario
    if ($accion == "atras")
    {
        $redireccion = $actual - 1;
        header("Location: pacientes.php?pagina=$redireccion");  
    }
    else if ($accion == "siguiente")
    {
        $redireccion = $actual + 1;
        header("Location: pacientes.php?pagina=$redireccion");      
    }
}


//Hizo clic en VER, no hay que exportar nada.
if (isset($_POST['verID']))
{
    $_SESSION['idCuestionario'] =  $_POST['verID'];
    header("Location: sheet1.php");
}

//Hizo clic en exportar
if (isset($_POST['exportarID']) && !isset($_POST['accion']))
{
    $idCuestionario = $_POST['exportarID'];
    $file = new Spreadsheet();

    //PAGINA 1

    $ArmoConsultaBD1 = 
    "SELECT fechaCompletado FROM cuestionario
    WHERE idCuestionario = $idCuestionario ";

    $ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
    $Resultado1 = $ConsultaBD1->fetch_assoc();

    $ArmoConsultaBD2 = "SELECT u.nombre,u.apellido FROM usuario u
                        INNER JOIN responsable r ON u.idUsuario = r.idUsuario
                        WHERE r.idResponsable = (SELECT idResponsable FROM cuestionario c WHERE c.idCuestionario = $idCuestionario)";
    $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);
    $Resultado2 = $ConsultaBD2->fetch_assoc();

    $ArmoConsultaBD3 = "SELECT h.nombre,h.dni, h.sexo, h.fechaNacimiento FROM cuestionario c INNER JOIN hijo h on c.idHijo = h.idhijo WHERE c.idCuestionario = $idCuestionario;";
    $ConsultaBD3 = $conexion->query($ArmoConsultaBD3);
    $Resultado3 = $ConsultaBD3->fetch_assoc();


    $nombreResponsable = $Resultado2["nombre"] . " " . $Resultado2["apellido"];
    $nombreHijo = $Resultado3 ['nombre'];
    
    $active_sheet = $file->getActiveSheet();
    $active_sheet -> setTitle("General");
    
    $active_sheet-> setCellValue("A1","Responsable");
    $active_sheet-> setCellValue("B1","Hijo/a");
    $active_sheet-> setCellValue("C1","Fecha completado");

    $active_sheet-> setCellValue("A2", $nombreResponsable);
    $active_sheet-> setCellValue("B2", $nombreHijo);
    $active_sheet ->setCellValue("C2", strval($Resultado1['fechaCompletado']));



    //PAGINA 2
    
    $ArmoConsultaBD2 = 
    "SELECT o.nombre as 'opcion', c.Detalle as 'categoria' FROM ParteUnoRespuestaSeccionA r
    INNER JOIN opcion o on r.idOpcion = o.idOpcion
    INNER JOIN categoria c on o.idCategoria = c.idCategoria
    WHERE idCuestionario = $idCuestionario AND seleccionada = 1 ";

    $ConsultaBD2= $conexion->prepare($ArmoConsultaBD2);
    $ConsultaBD2->execute();

    $Resultado2Set = $ConsultaBD2->get_result();
    $Resultado2 = $Resultado2Set->fetch_all(MYSQLI_ASSOC) ;


    $active_sheet2 = $file->createSheet();
    $active_sheet2 -> setTitle("Parte 1 - Seccion A");
    $active_sheet2 ->setCellValue("A1","Pregunta");
    $active_sheet2 -> setCellValue("B1","Opcion seleccionada");

    $count = 2;

    foreach($Resultado2 as $row)
    {
        $active_sheet2 ->setCellValue("A".$count, $row["categoria"]);
        $active_sheet2 ->setCellValue("B".$count, $row["opcion"]);

        $count = $count + 1;
    }

    //PAGINA 3


    $ArmoConsultaBD3 = 
    "SELECT detalle as 'Pregunta', nombre as 'Opcion' FROM ParteUnoRespuestaSeccionB r 
    INNER JOIN preguntaOpciones o on r.idPreguntaOpcion = o.idPreguntaOpciones 
    INNER JOIN pregunta p on p.idPregunta = o.idPregunta
    INNER JOIN opcionUnica ou on ou.idOpcionUnica = o.idOpcionUnica
    WHERE r.idCuestionario = $idCuestionario AND r.seleccionada = 1;";

    $ConsultaBD3= $conexion->prepare($ArmoConsultaBD3);
    $ConsultaBD3->execute();

    $Resultado3Set = $ConsultaBD3->get_result();
    $Resultado3 = $Resultado3Set->fetch_all(MYSQLI_ASSOC) ;

    $active_sheet3 = $file->createSheet();
    $active_sheet3 -> setTitle("Parte 1 - Seccion B");
    $active_sheet3->setCellValue("A1","Pregunta");
    $active_sheet3-> setCellValue("B1","Opcion seleccionada");

    $count = 2;

    foreach($Resultado3 as $row)
    {
        $active_sheet3 ->setCellValue("A".$count, $row["Pregunta"]);
        $active_sheet3 ->setCellValue("B".$count, $row["Opcion"]);

        $count = $count + 1;
    }
    
    //GUARDO ARCHIVO
    $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($file, "Xlsx" );

    $file_name = time() . "." . "xlsx";

    $writer->save($file_name);

    header('Content-Type: application/x-www-form-urlencoded');

    header('Content-Transfer-Encoding: Binary');

    header("Content-disposition: attachment; filename=\"".$file_name."\"");

    readfile($file_name);

    unlink($file_name);

    exit;
}

?>