<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'email';
    protected $useAutoIncrement = true; # db takes care of it
    protected $returnType = 'object'; # 'object' or 'array'
    protected $useSoftDeletes = false; # true if you expect to recover data
# Fields that can be set during save, insert, or update methods
    protected $allowedFields = ['email', 'username', 'password', 'photo'];
    protected $useTimestamps = false; # no timestamps on inserts and updates
# Do not use validations rules (for the time being...)
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    public function authenticate($email, $password)
    {
        $user = $this->where('email', $email)->first();
        if ($user && password_verify($password, $user->password))
            return $user;
        return FALSE;
    }

    public function saveUser($email, $username, $password)
    {
        $data = [
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];
        return $this->insert($data);
    }

    public function updateUser($email, $username, $photo)
    {
        $data = [
            'username' => $username,
            'photo' => $photo,
        ];
        return $this->update($email, $data);
    }





}