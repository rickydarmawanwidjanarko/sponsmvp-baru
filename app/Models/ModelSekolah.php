<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSekolah extends Model
{
    protected $table      = 'sekolah';
    protected $useTimestamps = false;

    protected $allowedFields = ['nama', 'email', 'password', 'detail', 'alamat', 'no_telp', 'kota', 'logo', 'kuota'];

    public function getSekolah($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function editData($data)
    {
        $this->db->table('sekolah')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function decreaseKuota($idsekolah)
    {
        $data = $this->where(['id' => $idsekolah])->first();
        $newData = [
            'kuota' => (int)$data['kuota'] - 1
        ];
        $this->db->table('sekolah')
            ->where('id', $idsekolah)
            ->update($newData);
    }
}
