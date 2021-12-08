<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function getAllData()
    {
        return $this->db->table('sekolah')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }
}
