<?php

namespace App\Controllers;

use App\Models\RecipesModel;
use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class InsertController extends Controller
{
    public function insert_recipe($page = 'insert_recipe')
	{
		if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			throw new PageNotFoundException($page);
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		return view('templates/header', $data)
			.view('pages/' . $page)
			.view('templates/footer');
	}
    
}
