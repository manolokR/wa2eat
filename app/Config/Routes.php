<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
use App\Controllers\User;

$routes->match(['get'], '/', [User::class, 'login']);
$routes->match(['get', 'post'], '/login', [User::class, 'login']);
$routes->match(['get', 'post'], '/loginAjax', [User::class, 'loginAjax']);
$routes->match(['get', 'post'], '/registerAjax', [User::class, 'registerAjax']);
$routes->match(['get'], '/home', [User::class, 'user_ok']);

// Ruta para boorar una receta dada un id
$routes->get('/recipes/delete/(:num)', 'RecipesController::delete/$1');

// Ruta cuando se cierra la sesión
$routes->get('/logout', 'User::logout');

// Ruta para ver una receta
$routes->get('/recipe/(:num)', 'RecipesController::view_recipe/$1');

$routes->get('/recipe/(:num)', 'RecipesController::view_recipe/$1');

// Ruta para obtener una imagen de una receta dado un id
$routes->get('recipe/image/(:num)', 'RecipesController::show_image/$1');

// Ruta para obtener un nombre de usuario dado un email
$routes->get('username/(:any)', 'User::show_name/$1');

// Rutas para formulario de ingresar recetas
$routes->get('/insert_recipe', 'InsertRecipeController::index', ['filter' => 'user_auth']);
$routes->match(['get', 'post'], '/search_ingredient', 'InsertRecipeController::search_ingredient');
$routes->post('/insert_recipe', 'InsertRecipeController::insert_recipe');

// Ruta para la búsqueda de recetas
$routes->match(['get', 'post'], '/search_recipe', 'RecipesController::search_recipe');


// Ruta para vista "Mis recetas"
$routes->get('/myrecipes', 'User::personalRecipes', ['filter' => 'user_auth']);

// Ruta para vista "Mi perfil"
$routes->get('/profile', 'User::myprofile', ['filter' => 'user_auth']);
$routes->post('/cambiarFoto', 'User::changeProfilePhoto');

$routes->get('login','Pages::viewLogin');

$routes->get('users','User::list');
$routes->get('users', 'User::list', ['filter' => 'admin_auth']);
$routes->get('home','Pages::prueba');
$routes->get('(:segment)', 'Home::index');

$routes->match(['get', 'post'], '/filterRecipes', 'RecipesController::filterRecipes');





/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
