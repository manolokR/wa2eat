<?php
namespace App\Models;

use CodeIgniter\Model;

class RecipesIngredientModel extends Model
{
    protected $table = 'recipes_ingredient';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data
# Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['id', 'amount', 'id_recipe','id_ingredient'];
    protected $useTimestamps = false; # no timestamps on inserts and updates
# Do not use validations rules (for the time being...)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


    public function saveRecipe($id, $amount, $id_recipe, $id_ingredient)
    {
        $data = [
            'id' => $id,
            'amount' => $amount,
            'id_recipe' => $id_recipe,
            'id_ingredient' => $id_ingredient,
        ];
        return $this->insert($data);
    }


}