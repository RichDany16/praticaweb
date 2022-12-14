<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/boostrap.css" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<body class="sb-nav-fixed">
    <?php include 'nav.php'; ?>
    <div id="layoutSidenav">
        <?php include 'sidebar.php'; ?>
        <div id="layoutSidenav_content">
        <h1 class="mt-4">Registro de usuario</h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./panel.php">Tablero</a></li>
   <li class="breadcrumb-item active">Registro</li>
      </ol>
              <!-- FORMULARIO -->
  <div class="col-5 border p-5 m-auto my-5">
    <h2 class="text-center mb-5">Registro de usuarios</h2>
    <form id="form" class="d-block user" action="./php/registeruser.php" method="POST">

      <!-- Name address input-->
      <div class="mb-3">
        <input class="form-control form-control-user" name="name" class="form-control" id="name" type="text" placeholder="Nombre" required />
      
      </div>
 

      <!-- Email address input-->
      <div class="mb-3">
        <input name="email" class="form-control form-control-user" id="email" type="email" placeholder="Correo" required />
        <span class="help-block text-danger" id="email-span"></span>
      </div>



      <!-- password input-->
      <div class="mb-3">
        <input class="form-control form-control-user" name="password" class="form-control" required id="password" type="password" placeholder="Contraseña" data-sb-validations="required" />
        <span class="help-block text-danger" id="password-span"></span>
      </div>



      <!-- password input-->
      <div class="mb-3">
        <input class="form-control form-control-user" name="repassword" class="form-control" required id="repassword" type="password" placeholder="Confirmar contraseña" data-sb-validations="required" />
        <span class="help-block text-danger" id="repassword-span"></span>
      </div>


      <div class=" mb-3">
        <select name="tipo" class="form-select form-control-user" id="type" aria-label="Default select example">
          <option selected>Seleccionar Tipo de usuario</option>
          <option value="1">Administrador</option>
          <option value="2">Usuario</option>
        </select>

      </div>






      <!-- Submit Button-->
      <div class="d-grid">
        <button class="btn btn-primary btn-user btn-block" id="submitButton" type="submit">
          Registrarse
        </button>
      </div>
    </form>
  </div>
  <!-- ------ -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>