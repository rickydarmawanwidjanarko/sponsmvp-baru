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
