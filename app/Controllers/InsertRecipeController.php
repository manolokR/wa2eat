<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InsertRecipeController extends Controller
{
    public function insertRecipe()
    {

        return view('templates/header')
            .view('pages/insertRecipe')
            . view('templates/footer');
    }
}
