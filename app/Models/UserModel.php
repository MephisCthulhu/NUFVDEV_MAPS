<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Username', 'email', 'Password'];

    public function getUserByUsername($Username)
    {
        return $this->where('Username', $Username)->first();
    }

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
    public function getPassword($Password)
        {
            return $this->where('Password', $Password)->first();
        }
}

