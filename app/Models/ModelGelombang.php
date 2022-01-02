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
            return $this->where(['id' => $idgelombang])->first();
        }


        return $this->where(['idsekolah' => $idsekolah])->findAll();
    }

    public function insertData($data)
    {
        $this->db->table('gelombang')
            ->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('gelombang')
            ->where('id', $data['id'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('gelombang')
            ->where('id', $data['id'])
            ->delete($data);
    }

    public function resetStatus()
    {
        $this->db->table('gelombang')
            ->update(['status' => 0]);
    }

    public function statusTa()
    {
        return $this->db->table('gelombang')
            ->where('status', '1')
            ->get()
            ->getRowArray();
    }

    public function getJumlah($idsekolah)
    {
        return $this->db->table('gelombang')
            ->where('idsekolah', $idsekolah)
            ->countAllResults();
    }
}
