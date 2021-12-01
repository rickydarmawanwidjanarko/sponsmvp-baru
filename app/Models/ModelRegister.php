<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRegister extends Model
{
    public function insertData($data)
    {
        $this->db->table('sekolah')
            ->insert($data);
    }
}
