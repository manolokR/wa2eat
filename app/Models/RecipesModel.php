<?php
namespace App\Models;

use CodeIgniter\Model;

class recipesModel extends Model
{
    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data
# Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['id', 'name', 'season','origin','photo','is_vegan','description','instructions','link'];
    protected $useTimestamps = false; # no timestamps on inserts and updates
# Do not use validations rules (for the time being...)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function saveRecipe($id, $name, $season, $origin, $photo, $is_vegan, $description, $instructions, $link)
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
        ];
        return $this->insert($data);
    }

    public function get_recipe_ingredients($recipe_id) {
        $builder = $this->db->table('recipes_ingredient');
        $builder->select('ingredient.name, ingredient.icon, recipes_ingredient.amount');
        $builder->join('ingredient', 'recipes_ingredient.id_ingredient = ingredient.id');
        $builder->where('recipes_ingredient.id_recipe', $recipe_id);
        $query = $builder->get();
        return $query->getResult();
    }
    
   /*  public function search_recipe($query)
    {
        if ($query) {
            return $this->like('name', $query)->findAll();
        }
        return [];
    } */

    public function search_recipe($query)
    {
        if ($query) {
            return $this->like('name', $query)->findAll();
        }
        return [];
    }
    
}