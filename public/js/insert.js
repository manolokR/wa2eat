
const ingredientSearch = document.querySelector('#ingredient_search');
const selectedIngredients = document.querySelector('#selected_ingredients');

const cancelQuantityBtn = document.getElementById("cancel_quantity");
cancelQuantityBtn.onclick = function () {
	$("#quantityModal").modal("hide");
};

const recipeForm = document.querySelector("form.my-form");

recipeForm.addEventListener("submit", function (event) {
	const selectedIngredients = Array.from(document.querySelectorAll(".selected-ingredient"));
  
	const ingredientsData = selectedIngredients.map((ingredientElem) => {
	  return {
		id: ingredientElem.dataset.ingredientId,
		amount: ingredientElem.querySelector(".ingredient-amount").textContent,
	  };
	});
  
	const hiddenInput = document.createElement("input");
	hiddenInput.type = "hidden";
	hiddenInput.name = "selected_ingredients";
	hiddenInput.value = JSON.stringify(ingredientsData);
  
	recipeForm.appendChild(hiddenInput);
  });

// Array para almacenar palabras clave seleccionadas
let ingredients = [];

function searchIngredients(query) {
	fetch('/search_ingredient', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded',
			'X-Requested-With': 'XMLHttpRequest' // Añadir esta línea
		},
		body: 'query=' + encodeURIComponent(query)
	})
		.then((response) => response.json())
		.then((searchResults) => {
			// Limpiar la lista de ingredientes coincidentes anterior
			const ingredientsList = document.querySelector('#ingredients_list');
			ingredientsList.innerHTML = '';

			// Agregar ingredientes coincidentes a la lista desplegable
			searchResults.forEach((ingredient) => {
				const listItem = document.createElement('li');
				listItem.classList.add('ingredient-item', 'd-flex', 'align-items-center', 'p-2', 'mb-1', 'bg-light', 'rounded');

				const iconElement = document.createElement('img');
				iconElement.setAttribute('src', '../imagenes/ingredientes/' + ingredient.icon);
				iconElement.setAttribute('alt', ingredient.name + ' icon');
				iconElement.classList.add('ingredient-icon', 'mr-2');
				listItem.appendChild(iconElement);

				const nameElement = document.createElement('span');
				nameElement.textContent = ingredient.name;
				nameElement.classList.add('ingredient-name', 'flex-grow-1');
				listItem.appendChild(nameElement);

				listItem.setAttribute('data-id', ingredient.id);
				listItem.setAttribute('title', 'Haz clic para seleccionar ' + ingredient.name); // Añade información adicional al ingrediente
				listItem.addEventListener('click', function () {
					$("#quantityModal").modal("show");
					const saveQuantityBtn = document.getElementById("save_quantity");
					saveQuantityBtn.onclick = function () {
						const quantity = document.getElementById("ingredient_quantity").value;
						if (quantity) {
							addIngredient(ingredient.name, ingredient.id, quantity, ingredient.icon);
							$("#quantityModal").modal("hide");
							document.getElementById("ingredient_quantity").value = "";
						}
					};
				});
				ingredientsList.appendChild(listItem);
			});
		});
}




// Función para agregar un ingrediente
function addIngredient(ingredientName, ingredientId, quantity, icon) {
	// Agregar el ingrediente al array y actualizar el campo de selección
	if (ingredientName && !ingredients.find(ing => ing.name === ingredientName)) {
		ingredients.push({ name: ingredientName, id: ingredientId, quantity: quantity, icon: icon });
		updateSelectedIngredients();
		ingredientSearch.value = '';
	}
}




// Función para eliminar una palabra clave
function removeIngredient(ingredient) {
	// Eliminar la palabra clave del array y actualizar el campo de selección
	ingredients = ingredients.filter(function (value) {
		return value != ingredient;
	});
	updateSelectedIngredients();
}

// Función para actualizar el campo de selección de palabras clave
function updateSelectedIngredients() {
	// Limpiar el campo de selección
	selectedIngredients.innerHTML = '';
  
	// Agregar cada ingrediente seleccionado al campo de selección
	ingredients.forEach(function (ingredient) {
	  const ingredientElement = document.createElement('div');
	  ingredientElement.classList.add('selected-ingredient');
	  ingredientElement.setAttribute('data-ingredient-id', ingredient.id);
  
	  // Crear el elemento de imagen para el icono del ingrediente
	  const iconElement = document.createElement('img');
	  iconElement.classList.add('ingredient-icon');
	  iconElement.src = '../imagenes/ingredientes/' + ingredient.icon;
	  ingredientElement.appendChild(iconElement);
  
	  // Agregar el nombre del ingrediente y la cantidad
	  const ingredientNameAndQuantity = document.createElement('span');
	  ingredientNameAndQuantity.textContent = `${ingredient.name} (${ingredient.quantity})`;
	  ingredientNameAndQuantity.classList.add('ingredient-amount');
	  ingredientElement.appendChild(ingredientNameAndQuantity);
  
	  // Agregar el botón para eliminar el ingrediente
	  const removeBtn = document.createElement('button');
	  removeBtn.classList.add('btn', 'btn-danger', 'btn-sm');
	  removeBtn.textContent = 'x';
	  removeBtn.addEventListener('click', function () {
		removeIngredient(ingredient);
	  });
  
	  ingredientElement.appendChild(removeBtn);
	  selectedIngredients.appendChild(ingredientElement);
	});
  }
  



// Agregar evento para agregar ingredientes cuando se presiona Enter en el campo de búsqueda
ingredientSearch.addEventListener('input', function (event) {
	// Llamar a la función searchIngredients para buscar y mostrar ingredientes coincidentes
	searchIngredients(event.target.value);
});

