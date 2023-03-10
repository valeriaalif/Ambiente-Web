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
  <title>Usuarios</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        
      <table class="table table-hover">
        <thead>
            <tr> 
            <th>Correo Electronico</th>
                <th>Estado </th>
                <th>Tipo Usuario </th>
                <th>Acciones </th>
            </tr>
</thead>
<tbody>
      <?php
       ConsultarUsuarios();
      ?>
      </tbody>
      </table>
        

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