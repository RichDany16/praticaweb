<?php
 
 session_start();
$tipouser = 3;

$conectado = isset($_SESSION["tipo"]);
if($conectado){
  $tipouser = $_SESSION["tipo"];
}else{
  $_SESSION["tipo"] = 3;
}
  

//$botoninicio = 3;
//ya registrados

$tipouser = 3;

$conectado = isset($_SESSION["tipo"]);
if ($conectado) {
  $tipouser = $_SESSION['tipo'];
  
}
?>


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
            <a href="index.php" class="nav-link px-2 link-secondary">Inicio</a>
          </li>
          <li>
            <a href="acercade.php" class="nav-link px-2 link-dark"
              >Acerca de</a
            >
          </li>
          <?php
          $navbar = <<< x
          <li>
            <a href="unidades.php" class="nav-link px-2 link-dark">Unidades</a>
          </li>
          
            <a href="noticias.php" class="nav-link px-2 link-dark">Noticias</a>
          </li>
         
          <li>
            
            <a href="tutoriales.php" class="nav-link px-2 link-dark"
              >Tutoriales</a
            >
          </li>
          x;

          if($tipouser == 1 || $tipouser == 2 ){
            echo $navbar;
            }
          




          ?>
          <li>
            <a href="contacto.php" class="nav-link px-2 link-dark">Contacto</a>
          </li>
          <li>
        </ul>

        <!--Boton registro-->
        <div class="col-md-3 text-end">
        <?php
          $botoninicio = <<< x
          <a href="sesion.php"
            ><button type="button" class="btn btn-outline-primary me-2">
              Iniciar Sesion
            </button></a
          >
          <a href="registro.php"
            ><button type="button" class="btn btn-primary">Registro</button></a
          >

          x;

          if($tipouser == 3){
            echo $botoninicio;
            }else{
          echo "
              <div class='form-group' > 
              <a href=' ./../edituser.php'><button type='button' class='btn btn-secundary'>Perfil</button></a>
              </div>
              
              <a href='./cerrarsesion.php'><button type='button' class='btn btn-secundary'>Cerrar sesion</button></a>
              </div>
    
              </div>
              ";
                     
            }

            ?>
          
          <?php
          $menuuser = <<< x
          
     
 
        x;

        if($tipouser == 1 || $tipouser = 2){
          echo $menuuser;
          }

          ?>



          
        
        </div>
      </header>
    </div>

