<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
      rel="stylesheet"
    />
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
            ><button type="submit" class="btn btn-primary">Registro</button></a
          >
        </div>
      </header>
    </div>

    <div class="registration-form">
      <form action="./../sesionu.php" method="POST" >
        <div class="form-icon">
          <span><i class="icon icon-user"></i></span>
        </div>
        <div  style="color: red;">
        <h3>Usuario no encontrado, revise bien su correo y contraseña </h3>
        </div> <br><br><br>

          <center>
        <div class="col-md-8 text-end">
          <a href="sesion.php"
            ><button type="button" class="btn btn-outline-primary me-2">
              Volver a pagina de inicio sesion
            </button></a>

         
          
        </div>
        </center>
      </header>
    </div>
      



      </form>
     
    </div>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"
    ></script>
    <script src="assets/js/script.js"></script>

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
  </body>
</html>
