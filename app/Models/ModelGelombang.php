<?php

namespace App\Models;

use CodeIgniter\Model;

class GelombangModel extends Model
{
    protected $table      = 'gelombang';
    protected $useTimestamps = false;

    protected $allowedFields = ['idsekolah', 'nama', 'detail', 'detail', 'persyaratan', 'tglawal', 'tglakhir'];

    public function getGelombang($idsekolah = false)
    {
        if ($idsekolah == false) {
            return $this->findAll();
        }

        return $this->where(['idsekolah' => $idsekolah])->first();
    }
}
