<?php
    include_once 'utilitarios.php';
    include_once '../Controllers/usuariosController.php';
    $datos = ConsultarUsuario($_GET["q"]);
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

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <?php
    MostrarMenu();
  ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">



                    <div class="card">
                        <div class="card-body login-card-body">
                            <h4 class="login-box-msg">Actualizar Información</h4>

                            <form action="" method="post">


                                <div class="row">
                                    <div class="col-6">
                                        <input type="email" class="form-control" placeholder="Correo Electrónico"
                                            required id="correoElectronico" name="correoElectronico"
                                            readOnly="true" value=<?php echo $datos["CorreoElectronico"] ?>>
                                    </div>
                                    <div class="col-6">
                                        <input type="password" class="form-control" placeholder="Contraseña" required
                                            id="contrasenna" name="contrasenna">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-4">
                                        <input type="text" class="form-control" placeholder="Identificación"
                                            required id="Identificacion" name="Identificacion" onkeyUp ="BuscarNombreApi();">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" placeholder="Nombre" required
                                            id="Nombre" name="Nombre" readOnly="true">
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control" placeholder="Perfil" required id="Perfil"
                                            name="Perfil">
                                            <?php
                                                ConsultarTiposUsuarios();
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="col-12">
                                        <input type="submit" class="btn btn-primary btn-block" value="Registrarse"
                                            id="btnRegistrarse" name="btnRegistrarse" disabled>
                                    </div> -->




                            </form>

                        </div>
                    </div>
                </div>





        </div>
        </section>
    </div>

    <?php
    MostrarFooter();
  ?>

    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <script src="javascripts/funcionesActualizarUsuario.js"></script>
</body>

</html>