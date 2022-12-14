<?php

require("./publicophp/connection.php");

$db = new Db();
$articulos = $db->buscar("articulos", "id>0");
// $noticias = $db->buscar("articulos", "id>0 AND tipo = 'Noticia'");

$notiText = "";
foreach ($articulos as $articulo) {
    $temp = <<<EOT

        <div class="col">
        <a href="unanoticia.php?id=$articulo[id]"><div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
          <img src="$articulo[photo]" class="card-img-top" alt="..."> 
        <div class="d-flex flex-column h-100 px-4 text-shadow-1">
            <h3 style="color: white" class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">$articulo[title]</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="0px" height="1em"><use xlink:href="#geo-fill"/></svg>
                <small style="color: white">21 de julio de 2022</small>
              </li>

            </ul>
          </div>
        </div>
      </div></a>
    EOT;

    $notiText .= $temp;
  
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilo/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  </head>
  <body>
    
    <!--Encabezado-->
    <?php include 'nav.php'; ?>
<!--Noticias-->
    <div class="container px-3 py-3" id="featured-3">
        <h2 class="pb-2 border-bottom">Noticias</h2>
    
    <div class="container px-4 py-5" id="custom-cards"> 
            <h5 class="pb-2 border-bottom">Ultima Publicacion</h5>        
    <div class="col">
        <a href="noticiauno.php"><div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"  style="background-image: url('img/oracle1.jpeg');">
            
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 style="color: white" class="pt-5 mt-5 mb-4 display-6  fw-bold ">MySQL Analytics Engine: Oracle dota de inteligencia a las BBDD</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="d-flex align-items-center me-3">
                <small>3 diciembre, 2020</small>
              </li>
            </ul>
          </div>          
        </div></a>       
      </div>     
    </div>
    

<!--Novedades-->    
    <div class="container px-4 py-5" id="custom-cards"> 
        <h5 class="pb-2 border-bottom">Novedades</h5>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php echo $notiText ?>

        </div>
      </div>
    </div>
  
















<!--Pie de Pagina-->
<div class="pie_pagina">
      <div class="container">
        <footer
          class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"
        >
          <p class="nav col-md-6">Autor:</b>Burgoin de la Peña Alan Ivan</p>
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

  </body>
</html>