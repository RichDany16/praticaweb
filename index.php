<?php
// 0 = iniciada
//4= no usuarios 
include("./publicophp/connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>index</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="estilo/estilos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script>
    function valid_inicio() {
      var in_correo = document.getElementById("email").value;
      var in_contra = document.getElementById("password").value;
      var Val_Email = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
      var Val_contra = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
      var nombre = document.getElementById("name").value;
      if (in_contra.length == 0 || in_correo.length == 0) {
        alert("Los campos no pueden quedar vacios");
        return false;
      }

      if (nombre)

        if (!Val_Email.test(in_correo)) {
          alert("El correo no es valido");
          return false;
        }

      if (!Val_contra.test(in_contra)) {
        alert(
          "La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, una minúscula y  una mayúscula."
        );
        return false;
      }
    }

    function mostrarPassword() {
      var cambio = document.getElementById("password");
      if (cambio.type == "password") {
        cambio.type = "text";
        $(".icon").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
      } else {
        cambio.type = "password";
        $(".icon").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
      }
    }
  </script>
</head>

<body>

  <!--Encabezado-->
  <?php include 'nav.php'; ?>


  <div class="bd-example-snippet bd-code-snippet">
    <div class="bd-example">
      <img src="img/image.jpg" alt="" width="100%" height="450" />
    </div>
  </div>

  <!--Bienvenida-->
  <div class="container px-3 py-3" id="featured-3">
    <div class="bd-example-snippet bd-code-snippet">
      <div class="bd-example">
        <!--Bienvenida <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"> imagen</text></svg>-->
      </div>
      <br />
    </div>

    <div class="col-md-12">
      <h2 class="pb-2 border-bottom">Bienvenidos 2</h2>
    </div>
    <div class="container marketing">
      <div class="row featurette">
        <div class="col-md-7">
          <p class="lead">
            En este curso desarrollarás estrategias empresariales considerando
            criterios de sustentabilidad, para obtener ventajas competitivas
            sostenibles en un entorno cambiante y globalizado. <br /><br />Te
            invitamos a revisar detenidamente el contenido de este curso, el
            cual tiene la intención de asesorarte en la forma de trabajo y
            manejo de las distintas secciones que contiene el curso que
            impartirás.
          </p>
        </div>

        <?php

        $iniciosesion = <<<x
          
                  <div class="col-md-5">
                    <div class="registration-form">
                      <form style="background-color: #edf2f4" action="./sesionu.php" method="POST">
                        <div>
                          <h3>Iniciar sesion</h3>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control item" id="email" name="email" placeholder="Correo" />
                        </div>
                        <div class="form-group input-group">
                          <input type="password" class="form-control item" id="password" name="password" placeholder="Contraseña"
                            alt="strongPass" />
                          <div class="input-group-append">
                            <button id="show_password" class="btn btn-primary item" type="button" onclick="mostrarPassword()">
                              <span class="fa fa-eye-slash icon"></span>
                            </button>
                          </div>
                        </div>
          
                        <div class="col-md-11 text-sm-end">
                          <a href="#" class="text-sm-end"> Olvide mi contraseña</a> <br> <br>
                          <div style="text-align: center" class="form-group">
                            <button type="submit" class="btn btn-block create-account" onclick="valid_registro()">
                              Iniciar
                            </button>
                            <a href="registro.php"><button type="button"
                                class="btn btn-block create-account">Registro</button></a>
                          </div>
                      </form>
                    </div>
                  </div>
            x;

        if ($_SESSION["tipo"] != 3 ) {
          
        }else{
          echo $iniciosesion;

        }
     


        ?>




      </div>
    </div>
    <!-- <img class="imagen1" src="base.jpg" width="400" height="300" alt="">-->
  </div>

  <div class="container px-3 py-3" id="featured-3">
    <div class="bd-example-snippet bd-code-snippet">
      <div class="bd-example">
        <!--Bienvenida <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"> imagen</text></svg>-->
      </div>
      <br />
    </div>



      <?php

        $novedades = <<<x


          <div class="col-md-12">
            <h2 class="pb-2 border-bottom">Novedades</h2>
          </div>
          <div class="row featurette">
            <div class="col-md-8">
              <a href="noticiauno.php">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                  style="background-image: url('img/oracle1.jpeg')">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                      <br /><br /><br /><br />
                      MySQL Analytics Engine: Oracle dota de inteligencia a las BBDD
                    </h3>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="0px" height="1em">
                          <use xlink:href="#geo-fill" />
                        </svg>
                        <small>3 diciembre, 2020</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>



            <div class="col-md-4">
              <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTecNMLosCabos&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                width="340" height="500" style="border: none; overflow: hidden" scrolling="no" frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
          </div>
        </div>


        <!--Unidades-->
        <div class="container px-3 py-3" id="featured-3">
          <h2 class="pb-2 border-bottom">Unidades</h2>
          <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
              <h3 class="fs-2">Unidad 1</h3>
              <p>
                Comprende las actividades de la administración de bases de datos.
                <br />Identifica las funciones del DBA y las características de los
                diferentes Sistemas Gestores de Base de datos (SGBD)
              </p>
              <div style="text-align: bottom">
                <a href="unidades.php"><button type="button" class="btn btn-primary">
                    Ir a la unidad
                  </button></a>
              </div>
            </div>
            <div class="feature col">
              <h3 class="fs-2">Unidad 2</h3>
              <p>
                Comprende los componentes de la Arquitectura del Manejador de Base
                de Datos con el fin de identificar las funciones de cada uno.
                <br />Instala y configura un SGBD cumpliendo con los requisitos
                recomendados.
              </p>
              <div style="text-align: bottom">
                <a href="unidades2.php"><button type="button" class="btn btn-primary">
                    Ir a la unidad
                  </button></a>
              </div>
            </div>
            <div class="feature col">
              <h3 class="fs-2">Unidad 3</h3>
              <p>
                Configura y administra el espacio en disco y memoria del servidor
                para que el funcionamiento del SGBD sea congruente con la
                infraestructura existente.
              </p>
              <div style="text-align: bottom">
                <a href="unidades3.php"><button type="button" class="btn btn-primary">
                    Ir a la unidad
                  </button></a>
              </div>
            </div>

            <div class="feature col">
              <h3 class="fs-2">Unidad 4</h3>
              <p>
                Identifica en los archivos log el funcionamiento de SGBD para
                prevenir cualquier problema del mismo.
              </p>
              <div style="text-align: bottom">
                <button type="button" class="btn btn-primary">
                  Ir a la unidad
                </button>
              </div>
            </div>

            <div class="feature col">
              <h3 class="fs-2">Unidad 5</h3>
              <p>
                Implementa los mecanismos técnicos de seguridad para salvaguardar la
                información en la organización.
              </p>
              <div style="text-align: bottom">
                <button type="button" class="btn btn-primary">
                  Ir a la unidad
                </button>
              </div>
            </div>

            <div class="feature col">
              <h3 class="fs-2">Unidad 6</h3>
              <p>
                Implementa la auditoría y el monitoreo de base de datos para
                controlar la seguridad de la información y del rendimiento de un
                SGBD.
              </p>
              <div style="text-align: bottom">
                <button type="button" class="btn btn-primary">
                  Ir a la unidad
                </button>
              </div>
            </div>
          </div>
        </div>

      x;
      if($_SESSION["tipo"] != 3){
        echo $novedades;
      }else{
        
      }

      ?>

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
            <li class="nav-item ms-6"><a href="https://www.netec.com/certificaciones-oracle-database"
                class="ms-5 mt-3 contacto">Certificacin de bases de datos</a></li>
            <li class="nav-item ms-6"><a href="https://www.ibm.com/mx-es/cloud/free/databases"
                class="ms-5 mt-3 contacto">Almacenamiento en la nube</a></li>
            <li class="nav-item ms-6"><a
                href="https://www.cepal.org/es/cursos/taller-creacion-administracion-bases-datos-aplicaciones-especiales-redatam-xplan-redatam"
                class="ms-5 mt-3 contacto">Taller de administracion BD</a></li>
            <li class="nav-item ms-6"><a href="https://www.oracle.com/mx/corporate/features/oracle-certification.html"
                class="ms-5 mt-3 contacto">Cursos de Oracle</a></li>

          </ul>
        </div>
      </footer>
      <p><b></p>
    </div>
  </div>
  <script>

const $form = document.querySelector('#form')
const $name = document.querySelector('#name')
const $name2 = document.querySelector('#name2')
const $email = document.querySelector('#email')
const $password = document.querySelector('#password')
const $password2 = document.querySelector('#password2')

const nameRegex = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/



$form.addEventListener('submit', e=>{
  e.preventDefault()
  if(nameRegex.test($name.value)){
    
  }else{
    e.preventDefault()
    alert('El nombre no es valido')
  }

  if(nameRegex.test($name2.value)){
    
  }else{
    e.preventDefault()
    alert('El apellido no es valido')
  }

  if(emailRegex.test($email.value)){

  }else{
    e.preventDefault()
    alert('El correo no es valido')
  }

  if($password.value.length >= 6){

  }else{
    e.preventDefault()
    alert('La contraseña debe tener al menos 6 caracteres')
  }

  if($password.value === $password2.value){

  }else{
    e.preventDefault()
    alert('Las contraseñas no coinciden')
  }

  if(nameRegex.test($name.value) && nameRegex.test($name2.value) && emailRegex.test($email.value) && $password.value.length >= 6 && $password.value === $password2.value){
    $form.submit()
  }


})

</script>


</body>

</html>