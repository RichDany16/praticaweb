<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        
  <link rel="stylesheet" href="./css/boostrap.css" />
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    

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
    <body class="bg-gradient-primary">
        <div class="container" id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
                 
                    <div class="col-lg-12">
                         <div class="p-5">
                            <div class="text-center">
                                 <h1 class="h4 text-gray-900 mb-4">Crear cuenta</h1>
                                    </div>
                                        <form class="user" action="./php/registeruser.php" method="POST">
                                            <div class="form-group row">
                                                             <!-- FORMULARIO -->
  <div class="col-5 border p-5 m-auto my-5">
    <form id="form" class="d-block user" action="./php/registeruser.php" method="POST">

      <!-- Name address input-->
      <div class="mb-3">
        <input class="form-control form-control-user" name="name" class="form-control" id="name" type="text" placeholder="User name" required />
      
      </div>
 

      <!-- Email address input-->
      <div class="mb-3">
        <input name="email" class="form-control form-control-user" id="email" type="email" placeholder="Email" required />
        <span class="help-block text-danger" id="email-span"></span>
      </div>



      <!-- password input-->
      <div class="mb-3">
        <input class="form-control form-control-user" name="password" class="form-control" required id="password" type="password" placeholder="Password" data-sb-validations="required" />
        <span class="help-block text-danger" id="password-span"></span>
      </div>



      <!-- password input-->
      <div class="mb-3">
        <input class="form-control form-control-user" name="repassword" class="form-control" required id="repassword" type="password" placeholder="Confirm Password" data-sb-validations="required" />
        <span class="help-block text-danger" id="repassword-span"></span>
      </div>


      <div class=" mb-3">
        <select name="tipo" class="form-select form-control-user" id="type" aria-label="Default select example">
          <option selected>Seleccionar Tipo de usuario</option>
          <option value="1">Administrador</option>
        </select>

      </div>






      <!-- Submit Button-->
      <div class="d-grid">
      
      <button class="btn btn-primary btn-user btn-block" id="submitButton" type="submit" onclick="valid_registro()">
          Registrarse
        </button>
        
      </div>

      
    </form>
  </div>             

  <div class="small"><a href="index.php">Ya Tienes Cuenta? Inicia sesion aqui.</a></div>
    </div>
        </div>
    <div class="card-footer text-center py-3">
        </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
