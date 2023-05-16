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
$(document).ready(function() {
  $('.filter-checkbox').change(function() {
    var filters = {
      is_vegan: $('#checkboxOne').is(':checked'),
      origin: [],
      season: []
    };

    if ($('#checkboxFour').is(':checked')) filters.origin.push('India');
    if ($('#checkboxFive').is(':checked')) filters.origin.push('Francia');
    if ($('#checkboxSix').is(':checked')) filters.origin.push('China');
    if ($('#checkboxSeven').is(':checked')) filters.origin.push('México');
    if ($('#checkboxEight').is(':checked')) filters.origin.push('España');
    if ($('#checkboxNine').is(':checked')) filters.origin.push('Japón');
    // y así sucesivamente para cada país

    if ($('#checkboxTen').is(':checked')) filters.season.push('Invierno');
    if ($('#checkboxEleven').is(':checked')) filters.season.push('Primavera');
    if ($('#checkboxTwelve').is(':checked')) filters.season.push('Verano');
    if ($('#checkbox13').is(':checked')) filters.season.push('Otoño');
    // y así sucesivamente para cada estación

    $.ajax({
      url: '/Controllers/RecipesController', // la URL de tu controlador que filtra las recetas
      method: 'POST',
      data: filters,
      success: function(data) {
        $('#recipeCards').html(data); // actualiza el contenido de la sección de recetas
      }
    });
  });
});
</script>

