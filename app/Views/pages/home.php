<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Recetas</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <!-- Filtro 1-->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Filtro 1</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <!--Contenido del dropdown-->
                <ul class="ks-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxOne" value="Order one">
                        <label for="checkboxOne">Opción 1 </label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkboxTwo" value="Order Two">
                        <label for="checkboxTwo">Opción 2 </label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkboxThree" value="Order Two">
                        <label for="checkboxThree">Opción 3 </label>
                    </li>
                </ul>
            </ul>
        </li><!-- Fin Filtro 1 -->

       <!-- Filtro 1-->
       <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Filtro 2</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <!--Contenido del dropdown-->
                <ul class="ks-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxFour" value="Order four">
                        <label for="checkboxFour">Opción 4 </label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkboxFive" value="Order five">
                        <label for="checkboxFive">Opción 5 </label>
                    </li>
                    <li>
                        <input type="checkbox" id="checkboxSix" value="Order six">
                        <label for="checkboxSix">Opción 6 </label>
                    </li>
                </ul>
            </ul>
        </li><!-- Fin Filtro 1 -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Perfil</span>
            </a>
        </li><!-- End Profile Page Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" href="https://www.instagram.com/salvaperfectti/">
                <i class="bi bi-envelope"></i>
                <span>Contacto</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/login">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Registro/Login</span>

            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="http://www.homerswebpage.com/">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->



    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Recetas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Recetas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <!-- FILA RECETA -->
        <div class="card info-card sales-card" class="container">
            <div class="row" style=" margin-bottom:-10px;" style="max-height: 0px;">
                <div class="col-md-3 imagen-container">
                    <img src="imagenes/platos/tiramisuPrueba.jpeg" style="margin-left:0px;" alt=""
                        class="img-fluid rounded-start">
                </div>
                <div class="col-md-9">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Opciones</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Guardar</a></li>
                            <li><a class="dropdown-item" href="#">Compartir</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Tiramisú <span>| Postres</span></h5>
                            <!--ingredientes-->
                            <div class="chip">
                                <img src="imagenes/ingredientes/azucar.png">
                                <b style="font-size: 14px">Azucar</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/cacao.png">
                                <b style="font-size: 14px">Cacao</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/cafe.png">
                                <b style="font-size: 14px">Café</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/huevo.png">
                                <b style="font-size: 14px">Huevos</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/sal.png">
                                <b style="font-size: 14px">Sal</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/mascarpone.png">
                                <b style="font-size: 14px">Mascarpone</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/vino.png">
                                <b style="font-size: 14px">Vino</b>
                            </div>
                            <!--fin ingredientes-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- FIN FILA RECETA -->


        <!-- FILA RECETA 2-->
        <div class="card info-card sales-card" class="container">
            <div class="row" style=" margin-bottom:-10px;" style="max-height: 0px;">
                <div class="col-md-3 imagen-container">
                    <img src="imagenes/platos/chickenAlfredoPrueba.jpg" style="margin-left:0px;" alt=""
                        class="img-fluid rounded-start">
                </div>
                <div class="col-md-9">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <h5 class="card-title">Chicken Alfredo Primavera <span>| Entrantes</span></h5>
                            <!--ingredientes-->
                            <div class="chip">
                                <img src="imagenes/ingredientes/aceite.png">
                                <b style="font-size: 14px">Aceite</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/ajo.png">
                                <b style="font-size: 14px">Ajo</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/nata.png">
                                <b style="font-size: 14px">Nata</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/quesoRallado.png">
                                <b style="font-size: 14px">Queso Rallado</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/nuez.png">
                                <b style="font-size: 14px">Nuez</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/mantequilla.png">
                                <b style="font-size: 14px">Mantequilla</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/pollo.png">
                                <b style="font-size: 14px">Pollo</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/pimienta.png">
                                <b style="font-size: 14px">Pimienta</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/sal.png">
                                <b style="font-size: 14px">Sal</b>
                            </div>
                            <!--fin ingredientes-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- FIN FILA RECETA 2-->

        <!-- FILA RECETA 3-->
        <div class="card info-card sales-card" class="container">
            <div class="row" style=" margin-bottom:-10px;" style="max-height: 0px;">
                <div class="col-md-3 imagen-container">
                    <img src="imagenes/platos/patatasPrueba.png" style="margin-left:0px;" alt=""
                        class="img-fluid rounded-start">
                </div>
                <div class="col-md-9">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <h5 class="card-title">Patatas Foster <span>| El diablo</span></h5>
                            <!--ingredientes-->
                            <div class="chip">
                                <img src="imagenes/ingredientes/bacon.png">
                                <b style="font-size: 14px">Bacon</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/patata.png">
                                <b style="font-size: 14px">Patatas</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/quesoRallado.png">
                                <b style="font-size: 14px">Queso Chedar</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/quesoRallado.png">
                                <b style="font-size: 14px">4 Quesos</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/quesoRallado.png">
                                <b style="font-size: 14px">Havarti</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/sal.png">
                                <b style="font-size: 14px">Sal</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/salsa.png">
                                <b style="font-size: 14px">Salsa Ranchera</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/salsa.png">
                                <b style="font-size: 14px">Salsa Cesar</b>
                            </div>

                            <div class="chip">
                                <img src="imagenes/ingredientes/salsa.png">
                                <b style="font-size: 14px">Salsa Chedar</b>
                            </div>

                            <!--fin ingredientes-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- FIN FILA RECETA 3-->

        <!-- FILA RECETA 4-->
        <div class="card info-card sales-card" class="container">
            <div class="row" style=" margin-bottom:-10px;" style="max-height: 0px;">
                <div class="col-md-3 imagen-container">
                    <img src="imagenes/platos/cebolla.png" style="margin-left:0px;" alt=""
                        class="img-fluid rounded-start">
                </div>
                <div class="col-md-9">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <h5 class="card-title">Cebolla <span>| Aperitivos</span></h5>
                            <div class="chip">
                                <img src="imagenes/ingredientes/cebolla.png">
                                <b style="font-size: 14px">Cebolla</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- FIN FILA RECETA 4-->



    </section>

</main><!-- End #main -->