
<?php $session = session(); ?>
<main id="main" class="main">

    <section class="section dashboard">

        <?php
        $recipesModel = new \App\Models\RecipesModel();
        $recipes = $recipesModel->findAll();

        if (sizeof($recipes) > 0) {
            foreach ($recipes as $row) {
                $ingredients = $recipesModel->get_recipe_ingredients($row->id);
                ?>
                <?php if ($session->get('user')->email == $row->email_user): ?>


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


                <?php endif; ?>
                <?php
            }
        }
        ?>

    </section>

</main><!-- End #main -->