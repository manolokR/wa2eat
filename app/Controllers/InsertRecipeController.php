<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InsertRecipeController extends Controller
{
    public function index()
    {
        return view('templates/header')
            .view('pages/insertRecipe')
            . view('templates/footer');
    }

    public function search_ingredient() {
        // Obtener la consulta de búsqueda desde el formulario
        $query = $this->request->getVar('query');
      
        // Cargar el modelo de ingredientes (si no lo has hecho)
        $ingredientModel = new \App\Models\IngredientModel();
      
        // Buscar ingredientes en la base de datos que coincidan con la consulta
        $ingredients = $ingredientModel->search_ingredient($query);
      
        // Devolver los ingredientes coincidentes en formato JSON
        return $this->response->setJSON($ingredients);
    }

    public function insert_recipe()
    {
        // Cargar los modelos necesarios
        $recipeModel = new \App\Models\RecipesModel();
        $recipesIngredientModel = new \App\Models\RecipesIngredientModel();

        // Obtener los datos del formulario
        $recipeData = $this->request->getPost();
        $selectedIngredients = json_decode($recipeData['selected_ingredients'], true);

        // Eliminar el elemento 'selected_ingredients' de los datos de la receta
        unset($recipeData['selected_ingredients']);

        // Insertar la receta en la tabla 'recipes'
        $recipeId = $recipeModel->insert($recipeData);

        // Insertar los ingredientes seleccionados y sus cantidades en la tabla 'recipes_ingredient'
        foreach ($selectedIngredients as $ingredient) {
            $recipesIngredientModel->insert([
                'id_recipe' => $recipeId,
                'id_ingredient' => $ingredient['id'],
                'amount' => $ingredient['amount']
            ]);
        }

        // Redireccionar a la página principal (o cualquier otra página que desees)
        return redirect()->to('/home');
    }
}
