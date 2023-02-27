<?php
include_once '../Controllers/loginController.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar Cuenta</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrar Cuenta</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo Electronico"  value = "" required id="correoelectronico" name= "correoelectronico" onclick="ValidarPswd();">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" required id= "contrasenna" name= "contrasenna" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirmar Contraseña" required id= "confirmarcontrasena" name= "confirmarcontrasena" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input type="submit" class="btn btn-primary btn-block"  id ="btnRegistrarse" name="btnRegistrarse" value= "Registrarse">
          </div>
        </div>
      </form>

      
      <!-- /.social-auth-links -->

    
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="javascripts/funcionesRegistro.js"></script>


</script>
</body>
</html>
