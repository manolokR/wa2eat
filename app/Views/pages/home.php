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

    <section class="section dashboard" id="recipeSection">
        <div id="recipeCards">
            <?php
            $recipesModel = new \App\Models\RecipesModel();
            $recipes = $recipesModel->findAll();

            if (sizeof($recipes) > 0) {
                foreach ($recipes as $row) {
                    $ingredients = $recipesModel->get_recipe_ingredients($row->id);
                    ?>
                    <!-- Inicio de la tarjeta de la receta -->
                    <div class="card info-card sales-card"
                        onclick="window.location.href='<?php echo base_url('recipe/' . $row->id); ?>'">
                        <a href="<?php echo base_url('recipe/' . $row->id); ?>">
                        </a>
                        <div class="row flex-nowrap">
                            <div class="col-lg-3 col-md-4 col-sm-12 imagen-container">
                                <img src="<?php echo base_url('recipe/image/' . $row->id); ?>" alt=""
                                    class="img-fluid rounded-start">
                            </div>

                            <div class="col-lg-9 col-md-8 col-sm-12">
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

                    <!-- Fin de la tarjeta de la receta -->
                    <?php
                }
            }
            ?>
        </div>
    </section>

</main><!-- End #main -->



<script>
let originalRecipes;

$(document).ready(function () {
    // Cuando se hace click en cualquier checkbox
    originalRecipes = $("#recipeCards").html();
    $("input[type='checkbox']").click(function () {
        let vegan = $('#checkboxOne').is(':checked') ? 1 : 0;
        let origins = [];
        let seasons = [];

        // Recoger los valores de los checkboxes de origen seleccionados
        $("input[id^='checkboxFour']:checked, input[id^='checkboxFive']:checked, input[id^='checkboxSix']:checked, input[id^='checkboxSeven']:checked, input[id^='checkboxEight']:checked, input[id^='checkboxNine']:checked").each(function () {
            origins.push($(this).val());
        });

        // Recoger los valores de los checkboxes de estaciones seleccionados
        $("input[id^='checkboxTen']:checked, input[id^='checkboxEleven']:checked, input[id^='checkboxTwelve']:checked, input[id^='checkbox13']:checked").each(function () {
            seasons.push($(this).val());
        });

        // Verificar si todos los checkboxes están desmarcados
        if ($("input[type='checkbox']:checked").length == 0) {
            // Si todos los checkboxes están desmarcados, restablece el contenido de las recetas
            $("#recipeCards").html(originalRecipes);
        } else {
            // Si no, realiza la petición AJAX
            $.ajax({
                url: '/filter_recipes',  // Asegúrate de que esta ruta esté definida en tus rutas
                method: 'POST',
                data: {
                    is_vegan: vegan,
                    origin: origins,
                    season: seasons
                }, //Meter los datos en un body para hacer el query directamente, especificar el formato JSON y comprobar si hay que especificar en header
                success: function (data) {
                    // Actualizamos el contenido de las recetas
                    $("#recipeCards").html(data);
                    originalRecipes = $("#recipeCards").html();
                }
            });
        }
    });
});
</script>
