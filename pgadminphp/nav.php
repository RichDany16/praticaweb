<?php

session_start();
$tipo = "";
if(!isset($_SESSION["email"])){
    header("Location: ./login.php");
}
$tipo = $_SESSION["tipo"];



if($tipo == "1"){
    $user = $_SESSION["email"];
    $name = $_SESSION["name"];
    $photo = $_SESSION["photo"];
}
else{

}
?>

<nav class="sb-topnav navbar navbar-expand "style="background-color: #5DADE2 ;">
            <!-- Navbar Brand-->
            <img src="./img/logo.png" alt="Profile Picture" class="img-responsive img-rounded px-1" style="max-width: 40px" />
      <a class="navbar-brand" href="panel.php" style="color: white">Base y Datos</a>
           
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary"  style="color: white;"  id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#"  style="color: white;" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     <!--   <li><a class="dropdown-item" href="#!">Configuracion</a></li>-->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="cerrarses.php">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>