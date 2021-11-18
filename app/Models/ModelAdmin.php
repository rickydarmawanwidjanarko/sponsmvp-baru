<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function getAllData()
    {
        return $this->db->table('tbl_user')
            ->orderBy('id_user', 'ASC')
            ->get()
            ->getResultArray();
    }
}
