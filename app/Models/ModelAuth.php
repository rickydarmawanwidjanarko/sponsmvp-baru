<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function login_user($user, $password)
    {
        return $this->db->table('user')->where(
            [
                'user' => $user,
                'password' => $password
            ]
        )->get()->getRowArray();
    }
}
