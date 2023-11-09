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

    $ArmoConsultaBD1 = 
    "SELECT o.nombre as 'opcion', c.Detalle as 'categoria' FROM ParteUnoRespuestaSeccionA r
    INNER JOIN opcion o on r.idOpcion = o.idOpcion
    INNER JOIN categoria c on o.idCategoria = c.idCategoria
    WHERE idCuestionario = $idCuestionario AND seleccionada = 1 ";

    $ConsultaBD1= $conexion->prepare($ArmoConsultaBD1);
    $ConsultaBD1->execute();

    $Resultado1Set = $ConsultaBD1->get_result();
    $Resultado1 = $Resultado1Set->fetch_all(MYSQLI_ASSOC) ;

    $file = new Spreadsheet();

    $active_sheet = $file ->getActiveSheet();

    $active_sheet->setCellValue("A1","Pregunta");
    $active_sheet-> setCellValue("B1","Opcion seleccionada");

    $count = 2;

    foreach($Resultado1 as $row)
    {
        $active_sheet ->setCellValue("A".$count, $row["categoria"]);
        $active_sheet ->setCellValue("B".$count, $row["opcion"]);

        $count = $count + 1;
    }

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