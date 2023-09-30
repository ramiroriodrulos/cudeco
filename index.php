<?php 
session_start();

session_destroy();
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
  </head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="recursos/loginImg.avif" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <span class="logoFont">Cudeco</span>
              </div>
              <p class="login-card-description">Ingresa a tu cuenta</p>
              <form action="login.php" method="POST">
                  <div class="form-group">
                    <label for="email" class="sr-only">Mail</label>
                    <input type="email" name="mail" id="mail" class="form-control" placeholder="Usuario">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Contraseña">
                  </div>
                  <input class="btn btn-block login-btn mb-4" type="submit" value="Entrar">
                </form>
                <a href="#!" class="forgot-password-link">Olvidé mi contaseña</a>
                <p class="login-card-footer-text">¿No tenes una cuenta? <a href="#!" class="text-reset">Registrate ahora</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Términos de uso.</a>
                  <a href="#!">Política de privacidad</a>
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
</body>
</html>