<link rel="stylesheet" href="<?= base_url("css/insert.css") ?>">
<main id="main" class="main">

  <section class="section dashboard">

    <h1>Subir una receta</h1>

    <form action=<?= base_url('/insert_recipe'); ?> method="post" enctype="multipart/form-data" class="my-form">

      <div class="form-content">
        <div class="form-group name-group">
          <label for="name">Nombre de la receta:</label>
          <input type="text" id="name" name="name" required class="form-control name-input">
        </div>

        <div class="form-group photo-group">
          <div class="image-upload-container">
            <input type="file" id="photo" name="photo" accept="image/*" class="form-control-file" style="display:none;">
            <label for="photo" class="image-upload-label">Selecciona o arrastra aquí una imagen de la receta</label>
            <img id="image-preview" src="#" alt="Vista previa de la imagen" style="display:none;">
          </div>
        </div>
      </div>

      <!-- Seleccionar descripción -->
      <div class="form-group">
        <label for="description">Descripción de la receta:</label>
        <textarea id="description" name="description" rows="4" cols="50" required class="form-control"></textarea>
      </div>

      <!-- Seleccionar instrucciones -->
      <div class="form-group">
        <label for="instructions">Instrucciones:</label>
        <textarea id="instructions" name="instructions" rows="6" cols="50" required class="form-control"></textarea>
      </div>

      <div class="form-row">

        <!-- Seleccionar origen -->
        <div class="form-group col-md-4">
          <label for="origin">Origen:</label>
          <select id="origin" name="origin" class="form-control">
            <option value="Española">Española</option>
            <option value="Francesa">Francesa</option>
            <option value="Italiana">Japonesa</option>
            <option value="Mexiana">Mexicana</option>
            <option value="China">China</option>
            <option value="India">India</option>
          </select>
        </div>

        <!-- Seleccionar temporada -->
        <div class="form-group col-md-4">
          <label for="season">Temporada:</label>
          <select id="season" name="season" class="form-control">
            <option value="invierno">Invierno</option>
            <option value="primavera">Primavera</option>
            <option value="verano">Verano</option>
            <option value="otoño">Otoño</option>
            <option value="4estaciones">4 estaciones</option>
          </select>
        </div>

      </div>

      <!-- Opción vegana -->
      <div class="form-group col-md-4">
        <label for="is_vegan" class="chip-label">Vegana</label>
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="is_vegan" name="is_vegan">
          <label class="custom-control-label chip" for="is_vegan"></label>
        </div>
      </div>

      <!-- Seleccionar ingredientes -->
      <label>Ingredientes:</label>
      <div class="input-group my-form">
        <input type="search" id="ingredient_search" name="ingredient_search" placeholder="Buscar ingredientes..."
          class="form-control" />

      </div>
      <ul id="ingredients_list" class="ingredients-list list-unstyled"></ul>

      <div class="form-group">
        <label for="selected_ingredients">Ingredientes seleccionados:</label>
        <div id="selected_ingredients" class="selected-ingredients-container"></div>
      </div>

      <!-- Modal para ingresar la cantidad del ingrediente -->
      <div class="modal fade" id="quantityModal" tabindex="-1" role="dialog" aria-labelledby="quantityModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="quantityModalLabel">Ingresa la cantidad</h5>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="ingredient_quantity">Cantidad</label>
                <input type="text" class="form-control" id="ingredient_quantity" name="ingredient_quantity"
                  placeholder="Ej: 2 tazas, 1/2 cucharada, 4 kg...">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="cancel_quantity"
                data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="save_quantity">Guardar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="link">Ingrese el enlace del video:</label>
        <input type="text" id="link" name="link" class="form-control"
          placeholder="ej: https://www.youtube.com/watch?v=cks8liHVdZg">
      </div>

      <input type="submit" value="Subir receta" class="btn btn-primary">
    </form>

    <script src="<?= base_url("js/insert.js") ?>"></script>

  </section>

</main><!-- End #main -->