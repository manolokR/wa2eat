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
    
      

}
