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

    <script>
      function valid_registro() {
        var in_name = document.getElementById("name").value;
        var Val_name = /^(?!.* $)[A-Z][a-z ]+$/;
        var in_name2 = document.getElementById("name2").value;
        var tel = document.getElementById("tel").value;
        var Val_tel =
          /^[\(]?[\+]?(\d{2}|\d{3})[\)]?[\s]?((\d{6}|\d{8})|(\d{3}[\*\.\-\s]){2}\d{3}|(\d{2}[\*\.\-\s]){3}\d{2}|(\d{4}[\*\.\-\s]){1}\d{4})|\d{8}|\d{10}|\d{12}$/;
        var in_correo = document.getElementById("email").value;
        var in_contra = document.getElementById("password").value;
        var in_contra2 = document.getElementById("password2").value;
        var Val_Email = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
        var Val_contra = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;

        if (
          in_contra.length == 0 ||
          in_contra2.length == 0 ||
          in_name.length == 0 ||
          tel.length == 0 ||
          in_correo.length == 0 ||
          in_name2.length == 0
        ) {
          alert("Los campos no pueden quedar vacios");
          return false;
        }
        if (!Val_name.test(in_name)) {
          alert("El nombre no es valido debe Iniciar con letra mayuscula");
          return false;
        }

        if (!Val_name.test(in_name2)) {
          alert("El Apellido no es valido debe Iniciar con letra mayuscula");
          return false;
        }

        if (!Val_tel.test(tel)) {
          alert("El telefono no es valido");
          return false;
        }
        if (!Val_Email.test(in_correo)) {
          alert("El correo no es valido");
          return false;
        }

        if (!Val_contra.test(in_contra)) {
          alert(
            "La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, una minúscula y  una mayúscula."
          );
        }

        if (in_contra != in_contra2) {
          alert("Las contraseñas deben de coincidir");
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

    <div class="registration-form">
      <form action=" ./publicophp/registrousuario.php "  id='form' method="POST"  >
        <div class="form-icon">
          <span><i class="icon icon-user"></i></span>
        </div>
        <div class="form-group">
          <input
            type="text"
            class="form-control item"
            id="name"
            name="name"
            placeholder="Nombre"
            minlength="2"
            required
            
          />
        </div>
        <div class="form-group">
          <input
            type="text"
            class="form-control item"
            id="name2"
            name="name2"
            placeholder="Apellido"
            minlength="5"
            required
            
          />
        </div>
        
        
        <div class="form-group">
          <input
            type="email"
            class="form-control item"
            id="email"
            name="email"
            placeholder="Correo"
            minlength="10"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            class="form-control item"
            id="password"
            name="password"
            placeholder="Contraseña"
            alt="strongPass"
            minlength="6"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="password"
            class="form-control item"
            id="password2"
            name="password2"
            placeholder="Confirmar contraseña"
            alt="strongPass"
            minlength="6"
            required
          />
        </div>
        

        <div style="text-align: center" class="form-group">
          <button
            type="submit"
            class="btn btn-block create-account"
            onclick="valid_registro()"
          >
            Crear Cuenta
          </button>
        </div>
      </form>
      <div class="social-media">
        <h5>Sign up with social media</h5>
        <div class="social-icons">
          <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
          <a href="#"><i class="icon-social-google" title="Google"></i></a>
          <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
        </div>
      </div>
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
