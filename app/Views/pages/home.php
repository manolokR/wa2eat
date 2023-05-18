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


                <div class="card info-card sales-card recipe-card"
                    onclick="window.location.href='<?php echo base_url('recipe/' . $row->id); ?>'">
                    <a href="<?php echo base_url('recipe/' . $row->id); ?>">
                    </a>
                    <div class="row flex-nowrap">
                        <div class="col-lg-3 col-md-4 col-sm-12 imagen-container">
                            <img src="<?php echo base_url('recipe/image/' . $row->id); ?>" alt=""
                                class="img-fluid rounded-start">
                        </div>

                        <div class="col-lg-9 col-md-8 col-sm-12">

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



    </section>

</main><!-- End #main -->


<script type="text/javascript">
    var base_url = '<?php echo base_url(); ?>';
</script>

<script>
    $(document).ready(function () {
        $('.filter-checkbox').on('change', function () {
            let filters = {
                is_vegan: $('#checkboxOne').is(':checked') ? 1 : 0,
                origin: [],
                season: []
            };

            // agrega los valores de los checkboxes seleccionados a los filtros
            $('.indian-cboxtags input:checked, .french-cboxtags input:checked, .chinese-cboxtags input:checked, .mexican-cboxtags input:checked, .spanish-cboxtags input:checked, .japanese-cboxtags input:checked').each(function () {
                filters.origin.push($(this).val());
            });

            $('.winter-cboxtags input:checked, .spring-cboxtags input:checked, .summer-cboxtags input:checked, .autumn-cboxtags input:checked').each(function () {
                filters.season.push($(this).val());
            });

            $.post('/getFilteredRecipes', filters, function (data) {
                // Limpia la sección de recetas antes de agregar las nuevas recetas
                $('.section.dashboard').empty();

                // Genera el contenido HTML para cada receta y lo agrega a la sección de recetas
                $.each(data, function (i, recipe) {
                    let ingredientsHtml = '';
                    $.each(recipe.ingredients, function (j, ingredient) {
                        ingredientsHtml += `
                        <div class="chip" title="Cantidad: ${ingredient.amount}">
                            <img src="imagenes/ingredientes/${ingredient.icon}">
                            <b style="font-size: 14px">${ingredient.name}</b>
                        </div>`;
                    });

                    let recipeHtml = `
                <div class="card info-card sales-card" onclick="window.location.href='recipe/${recipe.id}'">
                    <a href="recipe/${recipe.id}"></a> 
                    <div class="row flex-nowrap">
                        <div class="col-lg-3 col-md-4 col-sm-12 imagen-container">
                            <img src="${base_url}/recipe/image/${recipe.id}" alt="" class="img-fluid rounded-start">
                        </div>

                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">
                                    ${recipe.name} <span>| ${recipe.origin}</span>
                                </h5>
                                ${ingredientsHtml}
                            </div>
                        </div>
                    </div>
                </div>`;

                    $('.section.dashboard').append(recipeHtml);
                });
            }, 'json');
        });
    });


</script>