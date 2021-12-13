<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GelombangModel;
use App\Models\ModelAdmin;
use App\Models\SekolahModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
        $this->sekolahModel = new SekolahModel();
        $this->gelombangModel = new GelombangModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Dashboard',
        ];
        return view('admin/v_dashboard', $data);
    }

    public function profile()
    {
        $id_sekolah = session()->get('id_sekolah');
        $data_sekolah = $this->sekolahModel->getSekolah($id_sekolah);

        $data = [
            'title' => 'Detail Sekolah',
            'school' => $data_sekolah
        ];

        return view('admin/detail_sekolah', $data);
    }

    public function list_gelombang()
    {
        $id_sekolah = session()->get('id_sekolah');
        $data_gelombang = $this->gelombangModel->getGelombang($id_sekolah);

        $data = [
            'title' => 'Detail Sekolah',
            'gelombang' => $data_gelombang
        ];

        return view('admin/list_gelombang', $data);
    }

    public function detail_gelombang($id_gelombang)
    {
        $id_sekolah = session()->get('id_sekolah');
        $data_gelombang = $this->gelombangModel->getGelombang($id_sekolah, $id_gelombang);

        $data = [
            'title' => 'Detail Sekolah',
            'gelombang' => $data_gelombang
        ];

        return view('admin/detail_gelombang', $data);
    }
}
