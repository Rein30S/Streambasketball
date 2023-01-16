<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public $table = "user";
    public $primaryKey = 'id_user';
    public $returnType = "object";
    public $useTimestamps = true;
    public $allowedFields = ['nama_lengkap', 'email', 'password', 'level'];
}