<?php
include_once '../Controllers/usuariosController.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Recuperar Cuenta</title>

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
      <p class="login-box-msg">Recuperar Cuenta</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Correo Electronico"  value = "" required 
          id="correoelectronico" name= "correoelectronico" onblur="ValidarCorreo();">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-12">
            <input type="submit" class="btn btn-primary btn-block" 
             id ="btnRecuperar" name="btnRecuperar" value= "Recuperar Usuario">
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
<script src="javascripts/funcionesRecuperar.js"></script>


</script>
</body>
</html>