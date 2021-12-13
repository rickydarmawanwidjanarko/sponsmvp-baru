<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{
    protected $table            = 'pendaftaran';
    protected $useTimestamps    = false;

    protected $allowedFields    = ['idsiswa', 'idgelombang', 'waktu', 'dokumen', 'status'];

    public function getPendaftaran($idsiswa, $id = false)
    {
        if ($id == false) {
            return $this->where(['idsiswa' => $idsiswa])->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
