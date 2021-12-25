<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{
    protected $table            = 'pendaftaran';
    protected $useTimestamps    = false;

    protected $allowedFields    = ['idsiswa', 'idgelombang', 'waktu', 'dokumen', 'status'];

    const DIAJUKAN = '0';
    const DITERIMA = '1';
    const DITOLAK = '2';

    public function __construct()
    {
        parent::__construct();

        $this->baseQuery = "SELECT p.*, 
        s.nama as namasekolah, 
        g.nama as namagelombang,
        pd.nama as namasiswa 
        FROM pendaftaran p 
        LEFT JOIN gelombang g ON g.id = p.idgelombang
        LEFT JOIN sekolah s ON s.id = g.idsekolah
        LEFT JOIN siswa pd ON pd.id = p.idsiswa";
    }

    public function getPendaftaran($idsiswa, $id = false)
    {
        $sql = $this->baseQuery;

        if ($id != false) {
            $sql .= " where p.id = ?";

            return $this->db->query($sql, [$id])->getRow();
        }

        $sql .= " where p.idsiswa = ?";
        return $this->db->query($sql, [$idsiswa])->getResultArray();
    }

    public function isDaftar($idgelombang, $idsiswa)
    {
        return $this->where(['idsiswa' => $idsiswa, 'idgelombang' => $idgelombang])->first();
    }

    public function getStatus()
    {
        return [
            self::DIAJUKAN => 'DIAJUKAN',
            self::DITERIMA => 'DITERIMA',
            self::DITOLAK => 'DITOLAK'
        ];
    }
}
