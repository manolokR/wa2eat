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
function updateRecipeList() {
    // Obtén el estado de los checkboxes
    var vegan = document.getElementById("checkboxOne").checked;
    var countries = ['India', 'Francia', 'China', 'México', 'España', 'Japón'];
    var country = '';

    var checkboxes = document.querySelectorAll('input[type=checkbox]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked && countries.includes(checkboxes[i].nextElementSibling.innerText)) {
            country = checkboxes[i].nextElementSibling.innerText;
            break;
        }
    }

    var seasons = ['Invierno', 'Primavera', 'Verano', 'Otoño'];
    var season = '';
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked && seasons.includes(checkboxes[i].nextElementSibling.innerText)) {
            season = checkboxes[i].nextElementSibling.innerText;
            break;
        }
    }

    // Enviar una solicitud AJAX a tu controlador de recetas
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/filter_recipes", true);

    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            // Actualizar el contenido de la página con las recetas filtradas
            var recipes = JSON.parse(this.responseText);
            var recipeList = document.getElementById("recipeCards");
            recipeList.innerHTML = ''; // Limpiar la lista de recetas

            for (var i = 0; i < recipes.length; i++) {
                var recipeHTML = generateRecipeHTML(recipes[i]);
                recipeList.innerHTML += recipeHTML;
            }
        }
    };
    xhr.send("is_vegan=" + vegan + "&origin=" + country + "&season=" + season);
}


function generateRecipeHTML(recipe) {
  var recipeHTML = `
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
</div>`;
  return recipeHTML;
}



document.addEventListener('DOMContentLoaded', (event) => {
    updateRecipeList();
});
    </script>