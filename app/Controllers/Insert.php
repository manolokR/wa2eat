<?php
namespace App\Controllers;

class Insert extends BaseController
{
    
public function insertAjax()
{   
    $validation = \Config\Services::validation();
    $rules = [
        "recipe_name" => [
            "label" => "name",
            "rules" => "required"
        ],
        "recipe_description" => [
            "label" => "description",
            "rules" => "required"
        ],
        "is_vegan" => [
            "label" => "is_vegan"
        ],
        "origin" => [
            "label" => "origin"
        ],
        "season" => [
            "label" => "season"
        ],
        "instructions" => [
            "label" => "instructions"
        ],
        "recipe_photo" => [
            "label" => "photo"
        ],
        "recipe_video" => [
            "label" => "link"
        ]
    ];
    $data = [];

    $session = session();
    $recipes_model = model('RecipesModel');

    if ($this->request->getMethod() == "post") {
        if ($this->validate($rules)) {
            // Código de registro y respuesta exitosa
            $recipe_name = $this->request->getVar('recipe_name');
            $recipe_description = $this->request->getVar('recipe_description');
            $is_vegan = $this->request->getVar('is_vegan');
            $origin = $this->request->getVar('origin');
            $season = $this->request->getVar('season');
            $instructions = $this->request->getVar('instructions');
            $recipe_photo = $this->request->getVar('recipe_photo');
            $recipe_video = $this->request->getVar('recipe_video');
            $recipeData = [
                'recipe_name' => $recipe_name,
                'recipe_description' => $recipe_description,
                'is_vegan' => $is_vegan,
                'origin' => $origin,
                'season' => $season,
                'instructions' => $instructions,
                'recipe_photo' => $recipe_photo,
                'recipe_video' => $recipe_video,
               
            ];
            $recipes_model->saveRecipe($recipe_name,$season,$origin,$recipe_photo,$is_vegan,$recipe_description,$instructions,$recipe_video);

     

            return $this->response->setStatusCode(200)->setJSON([
                'text' => 'Receta añadida'
            ]);
        } else {
            $error_message = '';

            if ($validation->getError('recipe_name')) {
                $error_message = 'Hay que añadir nombre a la receta';
            } elseif ($validation->getError('recipe_description')) {
                $error_message = 'Se necesita una descripcion';
            } else {
                $error_message = 'Error desconocido';
            }

            return $this->response->setStatusCode(400)->setJSON([
                'text' => $error_message
            ]);
        }
    }

    return $this->response->setStatusCode(400)->setJSON([
        'text' => 'Solo se aceptan post request'
    ]);
}



}