<?php 
session_start();
require_once('config/config.php');

//Es un profesional de la salud
if (!empty($_POST['matricula']))
{
    $nombre = $_POST['nombreP'];
    $apellido = $_POST['apellidoP'];
    $mail = $_POST['mailP'];
    $contrasena = $_POST['contrasenaP'];
    $confirmarContrasena = $_POST['confirmcontrasenaP'];
    $matricula = $_POST['matricula'];

    //Valido contraseñas
    if ($contrasena != $confirmarContrasena)
    {
        header("Location: registro.php");    
    }

    //Confirmo que no exista mail
    $ArmoConsultaBD1 = "SELECT idUsuario FROM usuario WHERE mail = '$mail' ";
    $ConsultaBD1 = $conexion->query($ArmoConsultaBD1);
    $Resultado1 = $ConsultaBD1->fetch_assoc();

    if(isset($Resultado1))
    {
        header("Location: registro.php");   
    }

    //Inserto usuario - Tabla usuario
    $contraseñaEncriptada = hash ('sha512',$contrasena);

    $ArmoConsultaBD2 = "INSERT INTO usuario (idUsuario,nombre,apellido,mail,contrasenaEncriptada) VALUES (NULL,'$nombre','$apellido','$mail','$contraseñaEncriptada')";
    $ConsultaBD2 = $conexion->query($ArmoConsultaBD2);


    //Relaciono al usuario con los datos del profesinal - Tabla profesional
    $ArmoConsultaBD3 = "SELECT idUsuario FROM usuario WHERE mail = '$mail' ";
    $ConsultaBD3 = $conexion->query($ArmoConsultaBD1);
    $Resultado3 = $ConsultaBD3->fetch_assoc();
    $idUsuario = $Resultado3['idUsuario'];

    $ArmoConsultaBD4 = "INSERT INTO profesional (idProfesional,matricula,idUsuario) VALUES (NULL,$matricula,'$idUsuario')";
    $ConsultaBD4 = $conexion->query($ArmoConsultaBD4);
    header("Location: index.php");   

}
//Es un familiar de un niño/a
else if (!empty($_POST['nacimiento']))
{
    $nombre = $_POST['nombreF'];
    $apellido = $_POST['apellidoF'];
    $mail = $_POST['mailF'];
    $contrasena = $_POST['contrasenaF'];
    $confirmarContrasena = $_POST['confirmcontrasenaF'];
    $nacimiento = $_POST['nacimiento'];
    $documento = $_POST['documento'];

    //Valido contraseñas
    if ($contrasena != $confirmarContrasena)
    {
        header("Location: registro.php");    
    }

    //Confirmo que no exista mail
    $ArmoConsultaBD5 = "SELECT idUsuario FROM usuario WHERE mail = '$mail' ";
    $ConsultaBD5 = $conexion->query($ArmoConsultaBD5);
    $Resultado5 = $ConsultaBD5->fetch_assoc();

    if(isset($Resultado5))
    {
        header("Location: registro.php");   
    }

    //Inserto usuario - Tabla usuario
    $contraseñaEncriptada = hash ('sha512',$contrasena);

    $ArmoConsultaBD6 = "INSERT INTO usuario (idUsuario,nombre,apellido,mail,contrasenaEncriptada) VALUES (NULL,'$nombre','$apellido','$mail','$contraseñaEncriptada')";
    $ConsultaBD6 = $conexion->query($ArmoConsultaBD6);


    //Relaciono al usuario con los datos del familiar - Tabla responsable
    $ArmoConsultaBD7 = "SELECT idUsuario FROM usuario WHERE mail = '$mail' ";
    $ConsultaBD7 = $conexion->query($ArmoConsultaBD7);
    $Resultado7 = $ConsultaBD7->fetch_assoc();
    $idUsuario = $Resultado7['idUsuario'];

    $ArmoConsultaBD8 = "INSERT INTO responsable (idResponsable,fechaNacimiento,numeroDocumento,idUsuario) VALUES (NULL,'$nacimiento',$documento,$idUsuario)";
    $ConsultaBD8 = $conexion->query($ArmoConsultaBD8);
    header("Location: index.php");   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" type="image/ico">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Cudeco</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
<body>
  <main class="d-flex align-items-center">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="recursos/registro.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">

            <div class="brand-wrapper">
                <span class="logoFont">Cudeco</span>
              </div>
              <p class="login-card-description">Registro</p>
              <form action="registro.php" method="POST">

                    <select class="form-select" id = "tipoUsuario">
                    <option selected>Seleccione tipo de usuario</option>
                    <option id="infoProfesional" > Soy profesional de la salud</option>
                    <option id="infoFamiliar" > Soy familiar del niño/a</option>
                    </select>
                    <p>

                    <div class="form-group" id="infoFamiliarFrom">
                    <label for="text" class="sr-only">Nombre</label>
                    <input type="text" name="nombreF" id="nombreF" class="form-control" placeholder="Nombre">

                    <label for="text" class="sr-only">Apellido</label>
                    <input type="text" name="apellidoF" id="apellidoF" class="form-control" placeholder="Apellido">

                    <label for="text" class="sr-only">Número de documento</label>
                    <input type="text" name="documento" id="documento" class="form-control" placeholder="Número de documento">
                
                    <label for="date">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="nacimiento" id="nacimiento" placeholder="Fecha de nacimiento">

                    <label for="email" class="sr-only">Mail</label>
                    <input type="email" name="mailF" id="mailF" class="form-control" placeholder="Mail">

                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="contrasenaF" id="contrasenaF" class="form-control" placeholder="Contraseña">


                    <label for="password" class="sr-only">Confirmar contraseña</label>
                    <input type="password" name="confirmcontrasenaF" id="confirmcontrasenaF" class="form-control" placeholder="Confirmar contraseña">
            
                    <p>             
                    
                    <input class="btn btn-block login-btn mb-4" type="submit" value="Registrarme">
                    </div>

                    <p>
                    <div class="form-group" id="infoProfesionalFrom">
                    <label for="text" class="sr-only">Nombre</label>
                    <input type="text" name="nombreP" id="nombreP" class="form-control" placeholder="Nombre">

                    <label for="text" class="sr-only">Apellido</label>
                    <input type="text" name="apellidoP" id="apellidoP" class="form-control" placeholder="Apellido">

                    <label for="text" class="sr-only">Matricula</label>
                    <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Matricula">

                    <label for="email" class="sr-only">Mail</label>
                    <input type="email" name="mailP" id="mailP" class="form-control" placeholder="Mail">

                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="contrasenaP" id="contrasenaP" class="form-control" placeholder="Contraseña">


                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="confirmcontrasenaP" id="confirmcontrasenaP" class="form-control" placeholder="Confirmar contraseña">

                    <p>             
                    <input class="btn btn-block login-btn mb-4" type="submit" value="Registrarme">
                    </div>

                    <p class="login-card-footer-text">¿Ya tenes cuenta?<a href="index.php" class="text-reset"> Ingresa aquí</a></p>
                </form>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
            $(function() {

            $("#tipoUsuario").change(function() {
                if ($("#infoFamiliar").is(":selected")) {
                $("#infoFamiliarFrom").show();
                $("#infoProfesionalFrom").hide();
                }
                else if ($("#infoProfesional").is(":selected")){
                $("#infoProfesionalFrom").show();
                $("#infoFamiliarFrom").hide();
                }
                else
                {
                $("#infoFamiliarFrom").hide();
                $("#infoProfesionalFrom").hide();                 
                }
            }).trigger('change');
            });
  </script>


</body>
</html>