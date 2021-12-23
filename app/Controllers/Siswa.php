<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelSiswa;
use App\Models\ModelSekolah;

class Siswa extends BaseController
{
    public function __construct()
    {
        $this->ModelSiswa = new ModelSiswa();
        $this->ModelSekolah = new ModelSekolah();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Dashboard',
        ];
        return view('siswa/v_dashboardsiswa', $data);
    }

    public function biodatasiswa()
    {
        $data = [
            'title' => 'Biodata',
            'subtitle' => 'Siswa',
        ];
        return view('siswa/v_biodatasiswa', $data);
    }

    public function datasekolah()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Data Sekolah',
        ];
        return view('siswa/v_datasekolah', $data);
    }

    public function riwayatpendaftaran()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Riwayat Pendaftaran',
        ];
        return view('siswa/v_riwayatpendaftaran', $data);
    }

    public function get_sekolah()
    {

        $sekolah = $this->ModelSekolah->getSekolah();

        $data = [
            'title' => 'List Sekolah',
            'subtitle' => 'Dashboard',
            'schools' => $sekolah
        ];
        return view('siswa/sekolah', $data);
    }
}
