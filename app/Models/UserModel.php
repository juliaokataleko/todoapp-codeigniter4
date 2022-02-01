<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'email', 'phone', 'active', 
        'created_at', 'updated_at', 'password'
    ];
}
