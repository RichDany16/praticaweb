<?php

require("./publicophp/connection.php");

$db = new Db();
$array = $db->buscar("articulos", "id>0 AND tipo=1");
$array = array_reverse($array);
$n1 = $array[0];

$articulos = $db->buscar("articulos", "id>0 AND tipo=2");
$articulos = array_reverse($articulos);
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilo/estilos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

  <!--Encabezado-->
  <?php include 'nav.php'; ?>
  
  <div class="container mt-5 mx-auto">


<div class="row m-auto">
  <div class="order-md-2 col-9 m-auto">
    <h1 class="text-center">Noticias</h1>
    <div class="">


      <div class="row">
        <h2 class="text-center">Última noticia</h2>
        <section class="container px-4 mb-5 ">
          <div class="row shadow border-0 p-5">
            <div class="col-5">
              <img src="<?php echo $n1["photo"]; ?>" class="img-fluid rounded-start rounded-2" alt="..." />
            </div>
            <div class="col-7">
              <div class="card-body mx-4">
                <h4 class="card-title">
                  <?php echo $n1["title"]; ?>
                </h4>
                <p class="card-text" style="display: -webkit-box;
max-width: 100%;
-webkit-line-clamp: 4;
-webkit-box-orient: vertical;
overflow: hidden;">
                  <?php echo $n1["content"]; ?>
                </p>
                <a href="./unanoticia.php?id=<?php echo $n1["id"]; ?>" class="btn btn-primary mt-3">Leer más</a>
                <!-- <p class="card-text"><small class="text-muted">h</small></p> -->
              </div>
            </div>
          </div>
      </div>
      <div class="row gap-0">
        <!-- NUEVA -->
        <h2 class="text-center">Últimas noticias</h2>

        <?php


        $c = 0;
        foreach ($array as $value) {
          $c++;
          if ($c == 1) continue;

          if ($value["id"] != 1) {

            $link = '<a href="./unanoticia.php?id=' . $value["id"] . '" class="btn btn-primary mb-4 ms-4 me-auto">Leer más</a>';
            echo <<<HEREA
          <div class="col-6 col-md-6 col-lg-4 mb-3">
          <div class="card h-100 shadow border-0">
          <img class="card-img-top" src="$value[photo]" alt="burger" />
          <div class="card-body p-4">
          <h5 class="card-title mb-3">
                $value[title]
                </h5>
                <p class="card-text mb-0 " style="display: -webkit-box;
                max-width: 100%;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
                overflow: hidden;">
              $value[content]
              </p>
              </div>
              $link
          </div>
          </div>
          HEREA;
          }
        }

        ?>




        <!-- NUEVA -->
      </div>

      <hr>
      <div class="row gap-0">
        <!-- NUEVA -->
        <h2 class="text-center">Últimos articulos</h2>

        <?php


        $c = 0;
        foreach ($articulos as $value) {
          $c++;
          

          if ($value["id"] != 1) {

            $link = '<a href="./unanoticia.php?id=' . $value["id"] . '" class="btn btn-primary mb-4 ms-4 me-auto">Leer más</a>';
            echo <<<HEREA
          <div class="col-6 col-md-6 col-lg-4 mb-3">
          <div class="card h-100 shadow border-0">
          <img class="card-img-top" src="$value[photo]" alt="burger" />
          <div class="card-body p-4">
          <h5 class="card-title mb-3">
                $value[title]
                </h5>
                <p class="card-text mb-0 " style="display: -webkit-box;
                max-width: 100%;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
                overflow: hidden;">
              $value[content]
              </p>
              </div>
              $link
          </div>
          </div>
          HEREA;
          }
        }

        ?>




        <!-- NUEVA -->
      </div>
    </div>
  </div>

  <!-- SIDER BAR ojo -->

</div>
</div>

      <!-- SIDER BAR ojo -->


    </div>
















    <!--Pie de Pagina-->
    <div class="pie_pagina">
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="nav col-md-6">Autor:</b>Burgoin de la Peña Alan Ivan</p>
          <div class="nav col-md-3">
            <span class="icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>&nbsp;
            <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>&nbsp;
            <span class="icon"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
          </div>

          <div class="col mb-6">
            <h5 class="text-black">Enlaces de interes</h5>
            <ul class="nav flex-column">
              <li class="nav-item ms-6"><a href="https://www.netec.com/certificaciones-oracle-database" class="ms-5 mt-3 contacto">Certificacin de bases de datos</a></li>
              <li class="nav-item ms-6"><a href="https://www.ibm.com/mx-es/cloud/free/databases" class="ms-5 mt-3 contacto">Almacenamiento en la nube</a></li>
              <li class="nav-item ms-6"><a href="https://www.cepal.org/es/cursos/taller-creacion-administracion-bases-datos-aplicaciones-especiales-redatam-xplan-redatam" class="ms-5 mt-3 contacto">Taller de administracion BD</a></li>
              <li class="nav-item ms-6"><a href="https://www.oracle.com/mx/corporate/features/oracle-certification.html" class="ms-5 mt-3 contacto">Cursos de Oracle</a></li>

            </ul>
          </div>
        </footer>
      </div>
    </div>

</body>

</html>