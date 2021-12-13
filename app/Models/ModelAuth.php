<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function login_user($email, $password)
    {
        return $this->db->table('sekolah')->where(
            [
                'email' => $email,
                'password' => $password
            ]
        )->get()->getRowArray();
    }
}
