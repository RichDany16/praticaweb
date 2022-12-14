<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilo/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script type="text/javascript">
      function valid_cont(){
      var in_name = document.getElementById("name").value;
      var Val_name =  /^(?!.* $)[A-Z][a-z ]+$/ ;
      var in_correo = document.getElementById("email").value;
      var Val_Email = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
      var tel = document.getElementById("tel").value;
      var Val_tel = /^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){2}\d{3}|(\d{2}[\*\.\-\s]){3}\d{2}|(\d{4}[\*\.\-\s]){1}\d{4})|\d{8}|\d{10}|\d{12}$/;
      var Asun = document.getElementById("asunto").value;
      var msj = document.getElementById("mensaje").value;

      if (!Val_name.test(in_name)) {
        alert("El nombre no es valido");
      }

      if (!Val_Email.test(in_correo)) {
        alert("El correo no es valido");
      }

      if (!Val_tel.test(tel)) {
        alert("El telefono no es valido");
      }

      if (Asun == ""){
        alert("Llena el campo de asunto");
      }

      if (msj == ""){
        alert("Escribe tu mensaje");
      }

    }
    </script>

  </head>
  <body>
  
  
                    </ol>
    <!--Encabezado-->
    <?php include 'nav.php'; ?>

    <div class="container px-3 py-3" id="featured-3">
        <h2 class="pb-2 border-bottom">Contacto</h2>
    <div class="centrado">
    <div class="col-md-7 col-lg-9">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <label for="Name" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Nombre completo" value="" >
  
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Correo <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="tu@ejemplo.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-6">
              <label for="address" class="form-label">Telefono</label>
              <input type="tel" class="form-control" id="tel" placeholder="Telefono" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>


            <div class="col-12">
                <label for="firstName" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" placeholder="Asunto" value="" >
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

            
            <div class="col-12">
              <label for="address2" class="form-label">Mensajse<span class="text-muted"></span></label>
            <textarea class="col-12" placeholder="Escribe tu mensaje" id="mensaje"></textarea>
            </div>

            <a href="#"><button type="button" class="btn btn-primary" onclick="valid_cont()">Enviar</button></a>

            <div class="container px-3 py-3" id="featured-3">
              <h2 class="pb-2 border-bottom">Ubicacion</h2>
              <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14680.35471304514!2d-109.72316129999999!3d23.093849399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1666057193329!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
          <p class="nav col-md-6">Autor:</b>Balanzar Hernandez Jesus Daniiel</p>
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