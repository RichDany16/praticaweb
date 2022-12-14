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
      <h1 class="mt-4">Insertar Nuevo tutorial</h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./panel.php">Tablero</a></li>
 <li class="breadcrumb-item active">registro</li>
      </ol>
      <div class="col-5 border p-5 m-auto my-5">

        <h2 class="text-center mb-5">Insertar tuto</h2>

        <form id="form" class="d-block user" method="POST" action="./inserttuto.php">


        <div class="mb-3">
          <label for="date">Fecha de creación</label>
            <input  class="form-control form-control-user" disabled value="<?php echo date('Y-m-d'); ?>" name="date" class="form-control" id="date" type="date" placeholder="Fecha" required />
            <span class="help-block text-danger" id="title-span"></span>
          </div>

          <!-- Name address input-->
          <div class="mb-3">
            <input class="form-control form-control-user" name="title" class="form-control" id="title" type="text" placeholder="Nombre" required />
            <span class="help-block text-danger" id="title-span"></span>
          </div>


          <div class="mb-3">
            <input class="form-control form-control-user" name="author" class="form-control" id="author" type="text" placeholder="Autor" required />
            <span class="help-block text-danger" id="title-span"></span>
          </div>

          <div class="mb-3">
            <input type="url" class="form-control form-control-user" placeholder="https://youtube.com" name="photo">
            <span class="help-block text-danger" id="repassword-span"></span>
          </div>


          <div class="mb-3">
            <span class="help-block text-danger" id="title-span"></span>
          </div>
          
          <div class="mb-3">
            <select class="form-select form-control-user" name="tipo" id="tipo" aria-label="Default select example">
              <option selected>Tipo</option>  
              <option value="1">tutorial</option>
              <option value="2">Libro</option>
            </select>

            <br>

            <div class="mb-3">
              <select class="form-select form-control-user" name="state" id="state" aria-label="Default select example">
              <option selected>Selecciona el estado</option>  
              <option value="0">Inactivo</option>
                <option value="1">Activo</option>
              </select>

            </div>

            <div class="mb-3">
            <textarea class="form-control form-control-user" name="content" class="form-control" id="content" type="text" placeholder="Contenido" required></textarea>
            <span class="help-block text-danger" id="title-span"></span>
          </div>
            <div class="d-flex justify-content-center">
              <button class="btn btn-primary btn-user btn-block"  type="submit">Insertar</button>
            </div>
        </form>
      </div>
    </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>

</body>

</html>