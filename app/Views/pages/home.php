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
                <i class="bi bi-layout-text-window-reverse"></i><span>Filtro Vegano</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <!--Contenido del dropdown-->
                <ul class="vegan-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxOne" value="Order one">
                        <label for="checkboxOne">Recetas Veganas </label>
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
                <ul class="indian-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxFour" value="Order four">
                        <label for="checkboxFour">India </label>
                    </li>
                </ul>

                <ul class="french-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxFive" value="Order five">
                        <label for="checkboxFive">Francia </label>
                    </li>
                </ul>
                <ul class="chinese-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxSix" value="Order six">
                        <label for="checkboxSix">China </label>
                    </li>
                </ul>

                <ul class="mexican-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxSeven" value="Order seven">
                        <label for="checkboxSeven">México </label>
                    </li>
                </ul>

                <ul class="spanish-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxEight" value="Order eigth">
                        <label for="checkboxEight">España </label>
                    </li>
                </ul>

                <ul class="japanese-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxNine" value="Order nine">
                        <label for="checkboxNine">Japón </label>
                    </li>
                </ul>


            </ul>
        </li><!-- Fin Filtro 1 -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav3" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Estaciones</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <!--Contenido del dropdown-->
                <ul class="winter-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxTen" value="Order ten">
                        <label for="checkboxTen">Invierno </label>
                    </li>
                </ul>

                <ul class="spring-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxEleven" value="Order eleven">
                        <label for="checkboxEleven">Primavera </label>
                    </li>
                </ul>
                <ul class="summer-cboxtags">
                    <li>
                        <input type="checkbox" id="checkboxTwelve" value="Order twelve">
                        <label for="checkboxTwelve">Verano </label>
                    </li>
                </ul>

                <ul class="autumn-cboxtags">
                    <li>
                        <input type="checkbox" id="checkbox13" value="Order 13">
                        <label for="checkbox13">Otoño </label>
                    </li>
                </ul>

            </ul>
        </li><!-- Fin Filtro 1 -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/insert_recipe">
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

        <?php
        $recipesModel = new \App\Models\RecipesModel();
        $recipes = $recipesModel->findAll();

        if (sizeof($recipes) > 0) {
            foreach ($recipes as $row) {
                $ingredients = $recipesModel->get_recipe_ingredients($row->id);
                ?>


                <!-- Inicio de la tarjeta de la receta -->
                <div class="recipe-card-wrapper">
                    <a href="<?php echo base_url('recipe/' . $row->id); ?>" class="recipe-card-link">
                        <div class="card info-card sales-card">
                            <div class="row">
                                <div class="col-md-3 imagen-container">
                                    <img src="<?php echo base_url('recipe/image/' . $row->id); ?>" alt="" class="img-fluid rounded-start">
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
                                        <h5 class="card-title">
                                            <?php echo $row->name; ?> <span>|
                                                <?php echo $row->origin; ?>
                                            </span>
                                        </h5>
                                        <!--ingredientes-->
                                        <?php foreach ($ingredients as $ingredient) { ?>
                                            <div class="chip" title="Cantidad: <?php echo $ingredient->amount; ?>">
                                                <img src="imagenes/ingredientes/<?php echo $ingredient->icon; ?>">
                                                <b style="font-size: 14px">
                                                    <?php echo $ingredient->name; ?>
                                                </b>
                                            </div>
                                        <?php } ?>
                                        <!--fin ingredientes-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Fin de la tarjeta de la receta -->
                <?php
            }
        }
        ?>



    </section>

</main><!-- End #main -->