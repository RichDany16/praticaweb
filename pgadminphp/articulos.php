<?php

require("./php/connection.php");

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tables - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    
  <link rel="stylesheet" href="./css/boostrap.css" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include 'nav.php'; ?>
    <div id="layoutSidenav">
        <?php include 'sidebar.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Articulos Y Noticias</h1>
                    <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="./panel.php">Tablero</a></li>
<li class="breadcrumb-item active">Articulos</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                           Tabla de Articulos y Noticias
                            <a  href="articleform.php"
                           ><button style="text-align: right;" type="button" class="btn btn-primary">agregar</button></a></div>
                          
                           
                        
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tituto</th>
                                        <th>Autor</th>
                                        <th>Contenido del blog</th>
                                        <th>Foto</th>
                                        <th>Tipo</th>
                                        <th>Fecha</th>
                                        <th>Palabras clave</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Contenido</th>
                                        <th>Foto</th>
                                        <th>Tipo</th>
                                        <th>Fecha</th>
                                        <th>Palabras clave</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php

                                    $db = new Db();
                                    $resultado = $db->buscar("articulos", "id>0");

                                    foreach ($resultado as $art) {
                                        $tipo = $art["tipo"] == 1 ? "Articulo" : "Tutorial";
                                        $state = $art["state"] == 1 ? "Activo" : "Inactivo";
                                        echo <<<EOT
                                      <tr>
                                      <td>{$art["id"]}</td>
                                         <td>{$art["title"]}</td>
                                         <td>{$art["author"]}</td>
                                         <td>{$art["content"]}</td>
                                         <td>{$art["photo"]}</td>
                                         <td>$tipo</td>
                                         <td>{$art["date"]}</td>
                                         <td>{$art["keywords"]}</td>
                                         <td>$state</td>
                                         <td>
                                         <a href="./php/deletearticle.php?id={$art["id"]}" class="btn btn-danger">Eliminar</a>
                                            <a href="./editarticleform.php?id={$art["id"]}" class="btn btn-primary" >Editar</a>
                                            <a href="./verarticle.php?id={$art["id"]}" class="btn btn-warning" >Ver</a>
                                         </td>
                                        
                                        </tr>
                                      EOT;
                                    }


                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
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

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>