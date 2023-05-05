<link rel="stylesheet" href="<?= base_url("css/insert.css") ?>">
<main id="main" class="main">

<section class="section dashboard">

<h1>Upload a Recipe</h1>
<form action=<?= base_url('/insert_recipe'); ?> method="post" enctype="multipart/form-data" class="my-form">
  <div class="form-group">
    <label for="recipe_name">Recipe Name:</label>
    <input type="text" id="recipe_name" name="recipe_name" required class="form-control">
  </div>
  
  <div class="form-group">
    <label for="recipe_description">Recipe Description:</label>
    <textarea id="recipe_description" name="recipe_description" rows="4" cols="50" required class="form-control"></textarea>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" id="is_vegan" name="is_vegan" class="form-check-input">
    <label class="form-check-label" for="is_vegan">Vegan</label>
  </div>

  <div class="form-group">
    <label for="origin">Origin:</label>
    <select id="origin" name="origin" class="form-control">
      <option value="american">American</option>
      <option value="chinese">Chinese</option>
      <option value="indian">Indian</option>
      <option value="italian">Italian</option>
      <option value="mexican">Mexican</option>
    </select>
  </div>

  <div class="form-group">
    <label for="season">Season:</label>
    <select id="season" name="season" class="form-control">
      <option value="invierno">Invierno</option>
      <option value="primavera">Primavera</option>
      <option value="verano">Verano</option>
      <option value="otoño">Otoño</option>
      <option value="4estaciones">4 estaciones</option>
    </select>
  </div>


  <div class="form-group">
    <label for="instructions">Instructions:</label>
    <textarea id="instructions" name="instructions" rows="6" cols="50" required class="form-control"></textarea>
  </div>

  <div class="form-group">
    <label for="ingredient_search">Search Ingredients:</label>
    <div class="input-group">
      <input type="search" id="ingredient_search" name="ingredient_search" placeholder="Search ingredients..." class="form-control">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button" id="add_ingredient_btn">Add</button>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="selected_ingredients">Selected Ingredients:</label>
    <div id="selected_ingredients" class="form-control"></div>
  </div>

  <div class="form-group">
    <label for="recipe_photo">Upload a Photo:</label>
    <input type="file" id="recipe_photo" name="recipe_photo" accept="image/*" class="form-control-file">
  </div>

  <div class="form-group">
     <label for="recipe_video">Ingrese el enlace del video:</label>
     <input type="text" id="recipe_video" name="recipe_video" class="form-control">
  </div>

  <input type="submit" value="Upload Recipe" class="btn btn-primary">
</form>

<script>
// Seleccionar elementos DOM
const ingredientSearch = document.querySelector('#ingredient_search');
const addIngredientBtn = document.querySelector('#add_ingredient_btn');
const selectedIngredients = document.querySelector('#selected_ingredients');

// Array para almacenar palabras clave seleccionadas
let ingredients = [];

// Función para agregar una palabra clave
function addIngredient() {
  const ingredient = ingredientSearch.value.trim();

  // Agregar la palabra clave al array y actualizar el campo de selección
  if (ingredient && !ingredients.includes(ingredient)) {
    ingredients.push(ingredient);
    updateSelectedIngredients();
    ingredientSearch.value = '';
  }
}

// Función para eliminar una palabra clave
function removeIngredient(ingredient) {
  // Eliminar la palabra clave del array y actualizar el campo de selección
  ingredients = ingredients.filter(function(value) {
    return value != ingredient;
  });
  updateSelectedIngredients();
}

// Función para actualizar el campo de selección de palabras clave
function updateSelectedIngredients() {
  // Limpiar el campo de selección
  selectedIngredients.innerHTML = '';

  // Agregar cada palabra clave seleccionada al campo de selección
  ingredients.forEach(function(ingredient) {
    const ingredientElement = document.createElement('div');
    ingredientElement.classList.add('selected-ingredient');
    ingredientElement.textContent = ingredient;

    const removeBtn = document.createElement('button');
    removeBtn.classList.add('btn', 'btn-danger', 'btn-sm');
    removeBtn.textContent = 'x';
    removeBtn.addEventListener('click', function() {
      removeIngredient(ingredient);
    });

    ingredientElement.appendChild(removeBtn);
    selectedIngredients.appendChild(ingredientElement);
  });
}

// Agregar evento para agregar ingredientes cuando se hace clic en el botón "Add"
addIngredientBtn.addEventListener('click', function() {
  addIngredient();
});

// Agregar evento para agregar ingredientes cuando se presiona Enter en el campo de búsqueda
ingredientSearch.addEventListener('keydown', function(event) {
  // Verificar si la tecla presionada es "Enter"
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevenir el envío del formulario
    addIngredient();
  }
});


</script>




</section>

</main><!-- End #main -->


