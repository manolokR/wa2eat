<?php

namespace App\Controllers;

use App\Models\RecipesModel;
use App\Models\RecipesIngredientModel;
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

        return view('templates/header', $data)
            . view('pages/recipe_view')
            . view('templates/footer');
    }

    public function show_image($id)
    {
        $recipesModel = new \App\Models\RecipesModel();
        $recipe = $recipesModel->find($id);

        if ($recipe) {
            $photo = $recipe->photo;
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->buffer($photo);

            $this->response->setHeader('Content-Type', $mimeType);
            $this->response->setBody($photo);
            $this->response->send();
        }
    }

   public function search_recipe()
   {
       $query = $this->request->getVar('query');
       $recipesModel = new \App\Models\RecipesModel();
       $recipes = $recipesModel->searchRecipe($query);
       return $this->response->setJSON($recipes);
   }
}