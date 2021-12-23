<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGelombang extends Model
{
    protected $table      = 'gelombang';
    protected $useTimestamps = false;

    protected $allowedFields = ['idsekolah', 'nama', 'detail', 'detail', 'persyaratan', 'tglawal', 'tglakhir'];

    public function getGelombang($idsekolah, $idgelombang = false)
    {
        if ($idgelombang != false) {
            return $this->where(['idgelombang' => $idgelombang])->first();
        }


        return $this->where(['idsekolah' => $idsekolah])->findAll();
    }
}
