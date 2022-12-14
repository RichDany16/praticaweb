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
            <a href="noticias.php" class="nav-link px-2 link-dark">Noticias</a>
          </li>
          <li>
            <a href="tutoriales.php" class="nav-link px-2 link-secondary"
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
    </div>

    <!--Tutoriales-->
    <div class="container px-3 py-3" id="featured-3">
      <h2 class="pb-2 border-bottom">Administracion de bases de datos</h2>

      <div class="container px-4 py-5" id="custom-cards">
        <h5 class="pb-2 border-bottom">Como administrador de base de datos, puede ser responsable de mantener, 
            gestionar y administrar objetos de bases de datos, bases de datos e instancias de DB2, 
            por ejemplo espacios de tabla, tablas y vistas. Por ejemplo, puede ser que para llevar a cabo su 
            estrategia de copia de seguridad y recuperación necesite crear copias de seguridad periódicas 
            de sus bases de datos. </h5>
        <div class="col-12">
          <a href="#"
            ><div
              class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
              style="background-image: url('unsplash-photo-1.jpg')"
            >
              <div class="video">
                <iframe width="900" 
                height="600" 
                src="https://www.youtube.com/embed/vkSVsem1WDc" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe> 
            
              </div></div>
            </a>

        </div>
        
        <div>
          <li>Categoria: Video</li>
          <li>asdasdas</li>
        </div>
      </div>

      <!----------------VIDEOS DE INTRODUCCION----------------------->
      <div class="container contenedor-video">
        <div class="container px-4 py-5" id="custom-cards">
          <h5 class="pb-2 border-bottom">Videos relacionados</h5>

          <br />
          <div class="contenedor-cartas">
            <div class="card carta" style="width: 18rem">
                <iframe 
                width="auto" 
                height="auto" 
                src="https://www.youtube.com/embed/yoeV4Ex8C8U" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                    Conceptos básicos que debemos saber para poder crear nuestras bases de datos.
                </p>
              
              </div>
            </div>

            <!--------------------------------------------------------------------------------------------->
            <div class="card carta" style="width: 18rem">
                <iframe 
                width="auto" 
                height="auto" 
                src="https://www.youtube.com/embed/MRmmPJId5-k" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                Qué es un modelo de base de datos y como hacer un modelo relacional
                </p>
                
              </div>
            </div>
            <!--------------------------------------------------------------------------------------------->
            <div class="card carta" style="width: 18rem">
                <iframe 
                width="auto" 
                height="auto" 
                src="https://www.youtube.com/embed/u2bXiPJf9oQ" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                    Establecer relaciones y a crear un diagrama entidad relación.
                </p>
                
              </div>
            </div>

          </div>
        </div>
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
          <p class="nav col-md-6">Autor:</b>Balanzar Hernandez Jesus Daniel</p>
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
