<?php
namespace App\Models;

use CodeIgniter\Model;

class RecipesModel extends Model
{
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data
# Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['id', 'name', 'season', 'origin', 'photo', 'is_vegan', 'description', 'instructions', 'link', 'email_user'];
    protected $useTimestamps = false; # no timestamps on inserts and updates
# Do not use validations rules (for the time being...)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function saveRecipe($id, $name, $season, $origin, $photo, $is_vegan, $description, $instructions, $link, $email_user)
    {
        $data = [
            'id' => $id,
            'name' => $name,
            'season' => $season,
            'origin' => $origin,
            'photo' => $photo,
            'is_vegan' => $is_vegan,
            'description' => $description,
            'instructions' => $instructions,
            'link' => $link,
            'email_user' => $email_user
        ];
        return $this->insert($data);
    }

    public function get_recipe_ingredients($recipe_id)
    {
        $builder = $this->db->table('recipes_ingredient');
        $builder->select('ingredient.name, ingredient.icon, recipes_ingredient.amount');
        $builder->join('ingredient', 'recipes_ingredient.id_ingredient = ingredient.id');
        $builder->where('recipes_ingredient.id_recipe', $recipe_id);
        $query = $builder->get();
        return $query->getResult();
    }


    public function searchRecipe($query)
    {
        if ($query) {
            // Seleccionar todas las columnas excepto 'photo'
            $this->select('id, name, season, origin, is_vegan, description, instructions, link');

            return $this->like('name', $query)->findAll();
        }
        return [];
    }

    public function deleteRecipe($id) {
        return $this->delete($id);
    }
/*    public function filterRecipes($filters){
    $builder = $this->builder();

    if(isset($filters['origin'])){
        $builder->whereIn('origin', $filters['origin']);
    }

    if(isset($filters['season'])){
        $builder->whereIn('season', $filters['season']);
    }

    if(isset($filters['is_vegan'])){
        $builder->whereIn('is_vegan', $filters['is_vegan']);
    }

    return $builder->get()->getResultArray();*/

    public function filterRecipes($filters)
    {
        $builder = $this->db->table('recipes');
        $builder->select('id, name, season, origin, is_vegan, description, instructions, link');
    
        if (!empty($filters['origin'])) {
            $builder->whereIn('origin', $filters['origin']);
        }
    
        if (!empty($filters['season'])) {
            $builder->whereIn('season', $filters['season']);
        }
    
        if (!empty($filters['is_vegan'])) {
            $builder->where('is_vegan', $filters['is_vegan']);
        }
    
        $query = $builder->get();
        $recipes = $query->getResult();
    
        // Itera sobre cada receta y obtén los ingredientes de cada una
        foreach ($recipes as $recipe) {
            $recipe->ingredients = $this->get_recipe_ingredients($recipe->id);
        }
    
        return $recipes;
    }
    
} 

    
    
