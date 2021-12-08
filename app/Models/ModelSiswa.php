<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
    public function getAllData()
    {
        return $this->db->table('siswa')
            ->orderBy('id', 'ASC')
            ->get()
            ->getResultArray();
    }
}
