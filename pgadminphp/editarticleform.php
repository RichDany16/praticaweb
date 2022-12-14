<?php

//get id from url
$id = $_GET["id"];


include "./php/connection.php";
//get user from db
$db = new Db();
$data = $db->buscar("articulos", "id=$id");
$article = $data[0];

?>


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

  <link rel="stylesheet" href="./css/boostrap.css" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<body class="sb-nav-fixed">
  <?php include 'nav.php'; ?>
  <div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
    <div id="layoutSidenav_content">
      <h1 class="mt-4">Edición de articulo</h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
 <li class="breadcrumb-item active">articulo / <?php echo $id; ?></li>
      </ol>
      <div class="col-5 border p-5 m-auto my-5">

        <h2 class="text-center mb-5">Edición de articulo</h2>

        <form id="form" class="d-block" method="POST" action="./php/updatearticle.php">

          <!-- Name address input-->
          <div class="form-floating mb-3">
            <input name="title" value="<?php echo $article["title"] ?>" class="form-control" id="title" type="text" placeholder="nombre" required />
            <label for="title">titulo</label>
            <span class="help-block text-danger" id="title-span"></span>
          </div>


          <div class="form-floating mb-3">
            <input name="author" value="<?php echo $article["author"] ?>" class="form-control" id="author" type="text" placeholder="Autor" required />
            <label for="author">Autor</label>
            <span class="help-block text-danger" id="title-span"></span>
          </div>


          <div class="form-floating mb-3">
            <textarea style="height: 150px;" name="content" class="form-control" id="content" type="text" placeholder="Contenido" required><?php echo $article["content"] ?>  
          </textarea>
            <label for="content">Contenido</label>
            <span class="help-block text-danger" id="title-span"></span>
          </div>


    

          <div class="form-floating mb-3">
            <input value="<?php echo $article["photo"];  ?>" type="url" class="form-control" placeholder="https://" name="photo">
            <label for="photo">Url foto</label>
            <span class="help-block text-danger" id="repassword-span"></span>
          </div>

          <div class="form-floating mb-3">
            <input disabled name="date" value="<?php echo $article["date"] ?>" class="form-control" id="date" type="date" placeholder="Fecha" required />
            <label for="date">Fecha de creación</label>
            <span class="help-block text-danger" id="title-span"></span>
          </div>


          <div class="form-floating mb-3">
            <input name="keywords" value="<?php echo $article["keywords"] ?>" class="form-control" id="keywords" type="text" placeholder="Palabras clave" required />
            <label for="keywords">Palabras clave</label>
            <span class="help-block text-danger" id="title-span"></span>
          </div>

          <div class="form-floating mb-3">
            <select class="form-select" name="tipo" id="tipo" aria-label="Default select example">
              <option value="1" <?php echo $article["tipo"] == 1 ? "selected" : "" ?>>Articulo</option>
              <option value="2" <?php echo $article["tipo"] == 2 ? "selected" : "" ?>>Noticia</option>
            </select>

            <label for="type">Tipo de articulo</label>
            <hr />
            <div class="form-floating mb-3">
              <select class="form-select" name="state" id="state" aria-label="Default select example">
                <option value="0" <?php echo $article["state"] == 0 ? "selected" : "" ?>>Inactivo</option>
                <option value="1" <?php echo $article["state"] == 1 ? "selected" : "" ?>>Activo</option>
              </select>


              <label for="type">Estado</label>
            </div>
            


            <input type="hidden" name="id" value="<?php echo $id ; ?>">

            <div class="d-flex justify-content-center">
              <button class="btn btn-primary" id="submit" type="submit">Actualizar</button>
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