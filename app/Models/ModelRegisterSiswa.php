<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegisterSiswa extends Model
{
    public function insertData($data)
    {
        $this->db->table('siswa')
            ->insert($data);
    }
}
