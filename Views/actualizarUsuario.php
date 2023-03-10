<?php
    include_once 'utilitarios.php';
    include_once '../Controllers/usuariosController.php';
    MostrarHeader();
    MostrarMenu();
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">



            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Actualizar Información</p>
            


                    <form action="" method="post">
                    <div class = "row">
                        <div class = "col-6">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Correo Electronico" value="" required
                                id="correoelectronico" name="correoelectronico" onblur="ValidarCorreo();">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class = "row">
                            <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Contraseña" required
                                id="contrasenna" name="contrasenna">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                  
                            <div class ="col-4">
                            <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Identificacion" required
                                id="Identificacion" name="Identificacion">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                       
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" class="btn btn-primary btn-block" disabled id="btnRegistrarse"
                                    name="btnRegistrarse" value="Registrarse">
                            </div>
                        </div>
                    
                       </form>

                </div>
    </section>
</div>


<?php
    MostrarFooter();
  ?>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="javascripts/funcionesLogin.js"></script>

</script>
</body>

</html>