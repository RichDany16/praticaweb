<?php
include "./php/connection.php";

//get id from url
$id = $_GET["id"];
$name;
$email;
$password;
$tipo;
$photo;


//get user from db
$db = new Db();
$data = $db->buscar("users", "id=$id");
$user2 = $data[0];
$user2["tipo"] = 1;
if($data){
  foreach ($data as $row)
$id = $row["id"];
$name = $row["name"];
$email = $row["email"];
$password = $row["password"];
$tipo = $row["tipo"];
$photo = $row["photo"];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - SB Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

  <link rel="stylesheet" href="./css/boostrap.css" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<body class="sb-nav-fixed">
  <?php include 'nav.php'; ?>
  <div id="layoutSidenav">
    <?php include 'sidebar.php'; ?>
    <div id="layoutSidenav_content">
      <h1 class="mt-4">Registro de usuario</h1>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
 <li class="breadcrumb-item active">usuarios / <?php echo $id; ?></li>
      </ol>
      <div class="col-5 border p-5 m-auto my-5">

        <h2 class="text-center mb-5">Edición de usuario</h2>

        <form id="form" class="d-block" method="POST" action="./php/updateuser.php">

          <!-- Name address input-->
          <div class="form-floating mb-3">
            <input name="name" value="<?php echo $user2["name"] ?>" class="form-control" id="name" type="text" placeholder="nombre" required />
            <label for="email">Nombre</label>
            <span class="help-block text-danger" id="name-span"></span>
          </div>


          <!-- Email address input-->
          <div class="form-floating mb-3">
            <input  name="email" value="<?php echo $user2["email"] ?>" class="form-control" id="email" type="email" placeholder="nombre@correo.com" required />
            <label for="email">Correo</label>
            <span class="help-block text-danger" id="email-span"></span>
          </div>



          <!-- password input-->
          <div class="form-floating mb-3">
            <input name="password" value="<?php echo $user2["password"] ?>" class="form-control" required id="password" placeholder="Contraseña" data-sb-validations="required" />
            <label for="password">Contraseña</label>
            <span class="help-block text-danger" id="password-span"></span>
          </div>



          <!-- password input-->
          <div class="form-floating mb-3">
            <input name="repassword" class="form-control" required id="repassword" value="<?php echo $user2["password"] ?>" placeholder="Confirmar contraseña" data-sb-validations="required" />
            <label for="repassword">Confirmar contraseña</label>
            <span class="help-block text-danger" id="repassword-span"></span>
          </div>


          <!-- password input-->
          <div class="form-floating mb-3">
            <input value="<?php echo $user2["photo"];  ?>" type="url" class="form-control" placeholder="https://" name="photo">
            <label for="photo">Url foto</label>
            <span class="help-block text-danger" id="repassword-span"></span>
          </div>

          <div class="form-floating mb-3">
            <select class="form-select" name="tipo" id="tipo" aria-label="Default select example">
              <option value="1" <?php echo $user2["tipo"] == 1 ? "selected" : "" ?>>Administrador</option>
              <option value="2" <?php echo $user2["tipo"] == 2 ? "selected" : "" ?>>Usuario</option>
            </select>

            <label for="type">Tipo de usuario</label>
          </div>

          <input type="hidden" name="id" value="<?php echo $user2["id"]; ?>">

          <div class="d-flex justify-content-center">
            <button class="btn btn-primary" id="submit" type="submit">Actualizar</button>
          </div>
        </form>
      </div>
     
    </div>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>


  <script>
    const $name = document.getElementById("name");
    const $email = document.getElementById("email");
    const $password = document.getElementById("password");
    const $repassword = document.getElementById("repassword");

    const nameRegex =
      /^([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚúñ]+)(\s+([A-Za-zÑñÁáÉéÍíÓóÚú]+['\-]{0,1}[A-Za-zÑñÁáÉéÍíÓóÚú]+))*$/;

    const emailRegex =
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex = /^([+]\d{2})?\d{10}$/;


    $name.addEventListener("blur", (e) => {
      const value = e.target.value;
      const isFormayValid = nameRegex.test(value)
      if (value.trim() !== "" && isFormayValid) {
        document.getElementById("name-span").innerHTML = "";
      } else {
        document.getElementById("name-span").innerHTML = "Nombre no válido";
      }
    });




    $email.addEventListener("blur", (e) => {
      const value = e.target.value;
      const isFormayValid = emailRegex.test(value)
      if (value.trim() !== "" && isFormayValid) {
        document.getElementById("email-span").innerHTML = "";
      } else {
        document.getElementById("email-span").innerHTML = "Correo no válido";
      }
    });

    $password.addEventListener("blur", (e) => {
      const value = e.target.value;

      if (value.trim() !== "" && value.length > 7 && value.length < 20) {
        document.getElementById("password-span").innerHTML = "";
      } else {
        document.getElementById("password-span").innerHTML = "La contraseña debe ser mayor a 8 y menor a 20 carácteres";
      }
    });


    $repassword.addEventListener("blur", (e) => {
      const value = e.target.value;

      if (value.trim() !== "" && $password.value === value) {
        document.getElementById("repassword-span").innerHTML = "";
      } else {
        document.getElementById("repassword-span").innerHTML = "las contraseña deben coincidir";
      }
    });
  </script>
</body>

</html>