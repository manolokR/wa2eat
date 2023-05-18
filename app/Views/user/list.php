<main id="main" class="main">

    <section class="section dashboard">
        <h2>Usuarios</h2>
        <!-- LISTA DE USUARIOS -->
        <?php
        if (sizeof($users) > 0) {
            foreach ($users as $row) {
                echo $row->email . " - ";
                echo $row->username . " - ";
                echo $row->password . " ";
                echo "<br/>";
            }
        } else {
            echo "No user";
        }
        ?>


        <h2> Recetas </h2>
        <!-- LISTA DE RECETAS -->
        <?php
        $recipesModel = new \App\Models\RecipesModel();
        $recipes = $recipesModel->findAll();
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Temporada</th>
                    <th>Origen</th>
                    <th>Foto</th>
                    <th>Vegano</th>
                    <th>Descripción</th>
                    <th>Instrucciones</th>
                    <th>Enlace</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recipes as $row): ?>
                    <tr>
                        <td>
                            <?= $row->id; ?>
                        </td>
                        <td>
                            <?= $row->name; ?>
                        </td>
                        <td>
                            <?= $row->season; ?>
                        </td>
                        <td>
                            <?= $row->origin; ?>
                        </td>
                        <td>
                            <img src="<?= base_url('recipe/image/' . $row->id); ?>" alt="" class="img-thumbnail"
                                style="width: 100px;">
                        </td>
                        <td>
                            <?= $row->is_vegan ? 'Sí' : 'No'; ?>
                        </td>
                        <td>
                            <?= mb_strimwidth($row->description, 0, 10, "..."); ?>
                        </td>
                        <td>
                            <?= mb_strimwidth($row->instructions, 0, 10, "..."); ?>
                        </td>
                        <td>
                            <?= mb_strimwidth($row->link, 0, 50, "..."); ?>
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="window.location.href='<?php echo base_url('/recipes/delete/' . $row->id); ?>'">Borrar</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <script>
            function borrarReceta(recipeId) {
                
            }


        </script>
    </section>

</main><!-- End #main -->