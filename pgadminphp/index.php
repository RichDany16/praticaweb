


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/boostrap.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <link href="css/sb-admin-2.css" rel="stylesheet" />
</head>

<body class="w-50 my-5 mw-75 m-auto p-5 bg-gradient-primary">
<div class="card o-hidden border-0 shadow-lg my-5">
  <div id="loginForm" class="p-4 border">
  <div class="text-center">
  <h1 class="h4 text-gray-900 mb-4">Iniciar sesion</h1>
      </div>
    <form class="user" action="./php/loginadmin.php" id="form" method="POST">
      <!-- Email input -->
      <div class="mb-3">
        <input class="form-control form-control-user" required type="email"  name="email" id="email" placeholder="Correo"/>
        <span id="email-span" class="bad-input"></span>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input class="form-control form-control-user" required type="password" id="password" name="password" placeholder="contraseña" />
        <span id="password-span" class="bad-input"></span>
      </div>

      <!-- Submit button -->
<div class="d-flex justify-content-center my-2">

  <button type="submit" class="btn btn-primary col-auto text-center">Iniciar sesión</button>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="registro.php"><button type="button" class="btn btn-primary  ">Crear una cuenta</button></a>

</div> <div style="text-align: center;" class="small"><br>
<!-- Submit button <a href="./PRACTICAWEB/index.php">Pagina Publica</a></div><br><br> -->

      <!-- Register buttons -->
      <div class="col-auto text-center">
        <p>¿Olvidaste tu contraseña? <a href="./recoverpass.php">Recuperar</a></p>
      </div>
    </form>
  </div>
</div>
  <!-- <script src="./js/bootstrap.bundle.js"></script> -->
  <!-- <script src="./js/bootstrap.js"></script> -->
  <script src="./js/index.js"></script>
</body>

</html>