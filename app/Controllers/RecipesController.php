<?php

namespace App\Controllers;

use App\Models\RecipesModel;
use CodeIgniter\Controller;

class RecipesController extends Controller
{
    public function view_recipe($recipe_id)
    {
        $recipesModel = new RecipesModel();
        $recipe = $recipesModel->find($recipe_id);
        $ingredients = $recipesModel->get_recipe_ingredients($recipe_id);

        if ($recipe == null) {
            // Mostrar un mensaje de error si no se encuentra la receta
            return redirect()->to('/');
        }

        $data = [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
        ];

        return view('templates/header',$data)
            .view('pages/recipe_view', $data)
            . view('templates/footer');
    }

    
}
