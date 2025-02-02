<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InsertRecipeController extends Controller
{
    public function index()
    {
        $data['vista'] = 'insert';
        return view('templates/header', $data)
            . view('pages/insertRecipe')
            . view('templates/footer');
    }

    public function search_ingredient()
    {
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

        // Manejar el archivo de imagen
        $photo = $this->request->getFile('photo');
        if ($photo->isValid() && !$photo->hasMoved()) {
            $photoBlob = file_get_contents($photo->getRealPath());
            $recipeData['photo'] = $photoBlob;
        }

        // Obtener el email del usuario de la sesión
        $session = session();
        $userEmail = $session->get('user')->email;

        // Agregar el email del usuario a los datos de la receta
        $recipeData['email_user'] = $userEmail;

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

        // Redireccionar a la página principal
        return redirect()->to('/home');
    }


}