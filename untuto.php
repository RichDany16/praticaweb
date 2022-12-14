<?php

include "./publicophp/connection.php";

$id = $_GET["id"];

//get user from db
$db = new Db();
$currentPostData = $db->buscar("tutos", "id=$id");
$currentPost = $currentPostData[0];
$array = $db->buscar("tutos", "id>=0");
$sidePosts = "";



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>index</title>
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
   
  <main class="flex-shrink-0 mb-5">
    <!-- Navigation-->

    <?php
     include 'nav.php';


    //  if($_SESSION["tipo"] == 3){
    //    header("Location: ./index.php");
    //    exit();
    //  }
    ?>

    <div class="container mt-5 d-flex">
        <div class="row d-flex">
            <div class="col-8">
                <h1 class="fw-bolder font-size-lg">Tutorial</h1>
                <!-- Post content-->
                <article style="width: 90%;">
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-normal mb-1 fs-2"><?php echo $currentPost["title"]; ?> </h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Publicado el: <?php echo $currentPost["date"] ?></div>
                        <!-- Post categories-->

                       
                        <?php
                        // foreach ($currentPost["keywords"] as $category) {
                            echo "<hr>";
                            echo '<p class=" text-decoration-none mx-2">' . $currentPost["keywords"] . '</p>';
                        echo '<p class=" text-decoration-none ">Autor:' . $currentPost["author"] . '</p>';
                        // }
                        ?>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded border" style="width: 100%;" src="<?php echo $currentPost["photo"] ?>" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <?php echo $currentPost["content"] ?>
                    </section>

                    
                    <section class="d-flex justify-content-center">
                            <!-- video  -->
                            <!-- <input id="linkInput" value="<?php echo $currentPost["link"]; ?>"  type="hidden"> -->
                            <!-- <div id="yt" class="embed-responsive embed-responsive-16by9"> -->
                            
                            </div>

                    
                    </section>


                </article>

            </div>
            <!-- Side widgets-->
            <div class="col-4 d-flex flex-column p-3 mt-5">

                <h2>Relacionados</h2>

                <?php foreach ($array as $value) {

                    if ($value["id"] == $id) {
                        // $currentPost = $value;
                    } else {
                        echo $value["title"];
                        $link = "./untuto.php?id=$value[id]";
                        $x = <<<post
                                <a href="$link" class="text-decoration-none">
                                <div class="card d-flex p-3 mb-3">
                                <img src="$value[photo]" class="card-img mb-2" alt="..." >
                                <h6 class="">$value[title]</h6>
                                </div>
                                </a>
                                post;
                        echo $x;
                    }
                } ?>

            </div>



        </div>
    </div>

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

          <div class="col mb-5">
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
