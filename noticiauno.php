<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>noticia-uno</title>

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
      <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom"
      >
        <a
          href="/"
          class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"
        >
          <img
            class="bi me-2"
            src="logo.png"
            width="70"
            height="50"
            role="img"
            aria-label="Bootstrap"
          />
          <div class="letraslogo"><p>Bases y Datos</p></div>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li>
            <a href="index.php" class="nav-link px-2 link-dark">Inicio</a>
          </li>
          <li>
            <a href="acercade.php" class="nav-link px-2 link-dark"
              >Acerca de</a
            >
          </li>
          <li>
            <a href="unidades.php" class="nav-link px-2 link-dark">Unidades</a>
          </li>
          <li>
            <a href="contacto.php" class="nav-link px-2 link-dark">Contacto</a>
          </li>
          <li>
            <a href="noticias.php" class="nav-link px-2 link-secondary"
              >Noticias</a
            >
          </li>
          <li>
            <a href="tutoriales.php" class="nav-link px-2 link-dark"
              >Tutoriales</a
            >
          </li>
        </ul>

        <!--Boton registro-->
        <div class="col-md-3 text-end">
          <a href="sesion.php"
            ><button type="button" class="btn btn-outline-primary me-2">
              Iniciar Sesion
            </button></a
          >
          <a href="registro.php"
            ><button type="button" class="btn btn-primary">Registro</button></a
          >
        </div>
      </header>

      <!--Noticias-->

      <div class="container px-3 py-3" id="featured-3">
        <h2 class="pb-2 border-bottom">
          MySQL Analytics Engine: Oracle dota de inteligencia a las BBDD
        </h2>
        <div style="text-align: center">
          <img src="img/oracle1.jpeg" alt="" />
        </div>
        <br />
        <p>
          Oracle acaba de presentar Oracle MySQL Database Service con motor de
          análisis MySQL, un servicio optimizado y disponible exclusivamente en
          Oracle Cloud Infrastructure (OCI). Se trata del único servicio MySQL
          que ofrece a los clientes una plataforma individual y unificada tanto
          para cargas de trabajo Online Transactional Processing (OLTP) como
          para Online Analytics Processing (OLAP) para crear y ejecutar
          aplicaciones modernas de manera más rápida y segura. MySQL Analytics
          Engine, desarrollado para MySQL Database Service por el equipo de
          ingeniería MySQL de Oracle en colaboración con Oracle Labs, es un
          nuevo acelerador analítico in-memory que escala a miles de núcleos,
          admite análisis en tiempo real y es hasta 17 veces más rápido y un 66
          por ciento menos costoso que Amazon Redshift.
        </p>
      </div>
      <div class="container px-3 py-3" id="featured-3">
        <h4 class="pb-2 border-bottom">
          MySQL Analytics Engine: Oracle dota de inteligencia a las BBDD
        </h4>
        <div>
          <img src="img/noticass1.png" alt="" />
        </div>
        <br />
        <p>
          MySQL es la base de datos más popular entre los desarrolladores y es
          ampliamente utilizada por empresas de todos los sectores. Pero, hasta
          el día de hoy, los usuarios de MySQL se han visto obligados a mover
          sus datos a almacenes de datos incompatibles separados para análisis,
          lo que genera costes más altos y demora la respuesta”, dijo Edward
          Screven, chief corporate architect, Oracle. “Con las últimas
          innovaciones del equipo de ingeniería de MySQL, Oracle es el único
          proveedor que ofrece a los desarrolladores y gestores de bases de
          datos una plataforma individual y unificada que puede ejecutar
          fácilmente análisis de alto rendimiento en tiempo real en su base de
          datos MySQL sin requerir ningún cambio en sus aplicaciones MySQL, lo
          que hace que Oracle Cloud Infrastructure sea el mejor lugar para
          ejecutar aplicaciones MySQL”.
        </p>
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
  </body>
</html>
