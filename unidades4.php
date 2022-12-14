<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>index</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="estilo/estilos.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
       <!--Encabezado-->
       <div class="container">
         <!--Encabezado-->
    <?php include 'nav.php'; ?>

    <div class="container px-3 py-3" id="featured-3">
      <h2 class="pb-2 border-bottom">Unidades</h2>
      <a href="unidades.php"
        ><button type="button" class="btn btn-primary me-2">Unidad 1</button></a
      >
      <a href="unidades2.php"
        ><button type="button" class="btn btn-primary me-2">Unidad 2</button></a
      >
      <a href="unidades3.php"
        ><button type="button" class="btn btn-primary me-2">Unidad 3</button></a
      >
      <a href="unidades4.php"
        ><button type="button" class="btn btn-dark me-2">Unidad 4</button></a
      >
      <a href="unidades5.php"
        ><button type="button" class="btn btn-primary me-2">Unidad 5</button></a
      >
      <a href="unidades6.php"
        ><button type="button" class="btn btn-primary me-2">Unidad 6</button></a
      >
    </div>

    <div class="container px-6 py-6" id="featured-3">
      <h2 class="pb-2 border-bottom">
        4. Operacion y mantenimiento para administración de bases de datos.
      </h2>
      <div class="container marketing">
        <div class="row featurette">
          <div class="col-md-6">
            <br />
            <h3>Competencias</h3>
            <p class="lead">
              <li>
              Identifica en los archivos log el funcionamiento de SGBD para 
              prevenir cualquier problema del mismo.
              </li>
              <br />

              <li>
                Identifica y soluciona un erros de la administración de bases de datos.
              </li>
            </p>
          </div>

          <div class="col-md-6">
            <br />
            <img src="img/unidad1.jpg" alt="" width="100%" />
          </div>
        </div>
      </div>
    </div>
    <!--recursos de apoyo-->
    <div class="container px-4 py-5" id="custom-cards">
      <h4 class="pb-2 border-bottom">Recursos de apoyo</h4>

      <span class="icon2"
        ><i class="fa fa-file-pdf-o" aria-hidden="true"></span></i
        ><a href="pdf/1 Perspectiva de la administración de base de datos.pdf">
          Perspectiva de la administración de base de datos</a
        >
      <div class="container px-4 py-5" id="custom-cards">
        <h4 class="pb-2 border-bottom">Sitios de Oficiales</h4>
        <li>
          <a href="https://dev.mysql.com/downloads/mysql/">Descargar MySQL</a>
        </li>
        <li>
          <a href="https://dev.mysql.com/downloads/workbench/"
            >Descargar workbench</a
          >
        </li>
        <li>
          <a
            href="https://www.microsoft.com/es-mx/sql-server/sql-server-downloads"
            >Sitio oficial SQL Server</a
          >
        </li>
      </div>
    </div>

    <div class="container px-4" id="custom-cards">
      <h4 class="pb-2 border-bottom">Libros</h4>

      <div class="contenedor-cartas">
        <div class="card carta" style="width: 18rem">
          <iframe
            class="video-frame"
            width="560"
            height="315"
            src="pdf/unidad1/bases_de_datos.pdf"
            type="aplicacion/pdf"
          ></iframe>
          <div class="card-body">
            <h5 class="card-title">Software libre Bases de datos</h5>
            <p class="card-text"></p>
            <a href="./pdf/unidad1/bases_de_datos.pdf"
              ><button type="button" class="btn btn-primary">
                Ver Libro
              </button></a
            >
          </div>
        </div>

        <div class="card carta" style="width: 18rem">
          <iframe
            class="video-frame"
            width="560"
            height="315"
            src="pdf/unidad1/bdatos.pdf"
            type="aplicacion/pdf"
          ></iframe>
          <div class="card-body">
            <h5 class="card-title">Bases de datos</h5>
            <br />
            <p class="card-text"></p>
            <a href="./pdf/unidad1/bbatos.pdf"
              ><button type="button" class="btn btn-primary">
                Ver Libro
              </button></a
            >
          </div>
        </div>

        <div class="card carta" style="width: 18rem">
          <iframe
            class="video-frame"
            width="560"
            height="315"
            src="pdf/unidad1/Fundamentos de Bases de Datos.pdf"
            type="aplicacion/pdf"
          ></iframe>
          <div class="card-body">
            <h5 class="card-title">Fundamentos de Bases de Datos</h5>
            <p class="card-text"></p>
            <a href="./pdf/unidad1/Fundamentos de Bases de Datos.pdf"
              ><button type="button" class="btn btn-primary">
                Ver Libro
              </button></a
            >
          </div>
        </div>
      </div>
    </div>

        <!--Pie de Pagina-->
        <div class="pie_pagina">
      <div class="container">
        <footer
          class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"
        >
          <p class="nav col-md-6">Autor:</b>Burgoin de la Peña Alan Ivan</p>
          <div class="nav col-md-3">
            <span class="icon"
              ><i class="fa fa-facebook-official" aria-hidden="true"></i></span
            >&nbsp;
            <span class="icon"
              ><i class="fa fa-instagram" aria-hidden="true"></i></span
            >&nbsp;
            <span class="icon"
              ><i class="fa fa-whatsapp" aria-hidden="true"></i
            ></span>
          </div>

          <div class="col mb-5">
                <h5 class="text-black">Enlaces de interes</h5>
                <ul class="nav flex-column">
                  <li class="nav-item ms-6"><a href="https://www.netec.com/certificaciones-oracle-database" class="ms-5 mt-3 contacto">Certificacin de bases de datos</a></li>
                  <li class="nav-item ms-6"><a href="https://www.ibm.com/mx-es/cloud/free/databases" class="ms-5 mt-3 contacto">Almacenamiento en la nube</a></li>
                  <li class="nav-item ms-6"><a href="https://www.cepal.org/es/cursos/taller-creacion-administracion-bases-datos-aplicaciones-especiales-redatam-xplan-redatam" class="ms-5 mt-3 contacto">Taller de administracion BD</a></li>
                  <li class="nav-item ms-6"><a href="https://www.oracle.com/mx/corporate/features/oracle-certification.html" class="ms-5 mt-3 contacto">Cursos de Oracle</a></li>
                   
                </ul>
              </div>
        </footer>
  </body>
</html>
