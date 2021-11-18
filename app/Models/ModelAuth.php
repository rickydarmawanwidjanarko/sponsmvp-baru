<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function login_user($user, $password)
    {
        return $this->db->table('tbl_user')->where(
            [
                'user' => $user,
                'password' => $password
            ]
        )->get()->getRowArray();
    }

    public function login_siswa($no_pendaftaran, $password)
    {
        return $this->db->table('tbl_siswa')->where(
            [
                'no_pendaftaran' => $no_pendaftaran,
                'password' => $password
            ]
        )->get()->getRowArray();
    }
}
