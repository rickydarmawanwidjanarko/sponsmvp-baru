<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{
    protected $table            = 'pendaftaran';
    protected $useTimestamps    = false;
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['idsiswa', 'idgelombang', 'waktu', 'dokumen', 'status'];

    const DIAJUKAN = '0';
    const DITERIMA = '1';
    const DITOLAK = '2';

    public function __construct()
    {
        parent::__construct();

        $this->baseQuery = "SELECT p.*, pd.*,
        p.id as idpendaftaran,
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

    public function getPendaftar($idsekolah, $idgelombang = false, $idstatus = false)
    {
        $sql = $this->baseQuery;
        $sql .= " where 1=1";
        if ($idsekolah != false) {
            $sql .= " and g.idsekolah = " . $idsekolah;
        }

        if ($idstatus != false) {
            if ($idstatus == '3')
                $sql .= " and p.status = '0'";
            else
                $sql .= " and p.status = " . $idstatus;
        }

        if ($idgelombang != false) {
            $sql .= " and g.idgelombang = " . $idgelombang;
        }

        $sql .= " order by p.waktu desc";
        return $this->db->query($sql)->getResultArray();
    }

    public function getJumlahPendaftar($gelombangs, $idstatus = false)
    {

        return $this->db->table('pendaftaran')
            ->whereIn('idgelombang', $gelombangs)
            ->where('status', $idstatus)
            ->countAllResults();
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
