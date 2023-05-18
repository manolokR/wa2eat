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

        // Obtén el nombre de usuario a partir del correo electrónico
        $userModel = new \App\Models\UserModel();
        $email = $recipe->email_user;
        $user = $userModel->where('email', $email)->first();
        $username = $user->username;
        $photo = $user->photo;

        if ($recipe == null) {
            // Mostrar un mensaje de error si no se encuentra la receta
            return redirect()->to('/');
        }

        $data = [
            'recipe' => $recipe,
            'ingredients' => $ingredients,
            'username' => $username,
            'photoUser' => $photo,
        ];

        $data2['vista'] = 'view';
        return view('templates/header',$data2)
            . view('pages/recipe_view', $data)
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

    public function delete($id)
    {
        $recipeModel = new RecipesModel();
        $recipeIngredientModel = new RecipesIngredientModel();

        // Primero, borra todas las entradas de la tabla recipes_ingredient
        if ($recipeIngredientModel->deleteRelation($id)) {
            // Si se eliminaron las relaciones correctamente, borra la receta
            if ($recipeModel->deleteRecipe($id)) {
                // La receta se eliminó correctamente
                return redirect()->to('/users')->with('message', 'Receta eliminada correctamente');
            } else {
                // Hubo un error al eliminar la receta
                return redirect()->back()->with('error', 'No se pudo eliminar la receta');
            }
        } else {
            // Hubo un error al eliminar las relaciones
            return redirect()->back()->with('error', 'No se pudieron eliminar las relaciones de ingredientes de la receta');
        }
    }

    public function getFilteredRecipes()
    {
        $model = new RecipesModel();

        $filters = $this->request->getPost();

        $recipes = $model->filterRecipes($filters);

        return $this->response->setJSON($recipes);
    }

}