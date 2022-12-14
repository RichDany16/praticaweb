<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion " style="background-color: #5DADE2 ;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="panel.php">
                                <div class="sb-nav-link-icon"style="color:white"><i class="fa-solid fa-house"></i></i></div>
                               <b style="color:white"> Tablero </b>
                            </a>
                          
                            <a class="nav-link" href="users.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fas fa-users"></i></div>
                                <b style="color:white">  Usuarios</b>
                            </a>
                            
                            <a class="nav-link" href="articulos.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fas fa-table"></i></div>
                                <b style="color:white"> Articulos y Noticias</b>
                            </a>

                            <a class="nav-link" href="tutos.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fas fa-table"></i></div>
                                <b style="color:white"> Tutoriales y Libros</b>
                            </a>
                    <!--        
                            <a class="nav-link" href="userform.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fa-regular fa-calendar-check"></i></div>
                                <b style="color:white" >Alta de usuarios</b>
                            </a>

                            
                            <a class="nav-link" href="articleform.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fa-regular fa-calendar-check"></i></div>
                                <b style="color:white">Alta de articulos</b>
                            </a>

                            <a class="nav-link" href="tutosform.php">
                                <div class="sb-nav-link-icon" style="color:white"><i class="fa-regular fa-calendar-check"></i></div>
                                <b style="color:white">Alta de tutoriales</b>
                            </a>


-->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Cuenta en linea como:</div>
                        <?php echo $_SESSION["name"] ?>
                    </div>
                </nav>
            </div>