<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGelombang;
use App\Models\ModelAdmin;
use App\Models\ModelSekolah;
use App\Models\ModelPendaftaran;

class Admin extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdmin = new ModelAdmin();
        $this->ModelSekolah = new ModelSekolah();
        $this->ModelGelombang = new ModelGelombang();
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->id_sekolah = session()->get('id_sekolah');
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
        $data_sekolah = $this->ModelSekolah->getSekolah($this->id_sekolah);

        $data = [
            'title' => 'Detail Sekolah',
            'subtitle' => 'Detail Sekolah',
            'school' => $data_sekolah
        ];

        return view('admin/v_detail_sekolah', $data);
    }

    public function list_gelombang()
    {
        $data_gelombang = $this->ModelGelombang->getGelombang($this->id_sekolah);

        $data = [
            'title' => 'Gelombang',
            'subtitle' => 'Pendaftaran',
            'gelombang' => $data_gelombang
        ];

        return view('admin/v_list_gelombang', $data);
    }

    public function list_pendaftar()
    {
        $data = [
            'title' => 'List',
            'subtitle' => 'Pendaftaran',

        ];

        return view('admin/v_list_pendaftar', $data);
    }

    public function detail_gelombang($id_gelombang)
    {
        $data_gelombang = $this->ModelGelombang->getGelombang($this->id_sekolah, $id_gelombang);

        $data = [
            'title' => 'Detail Sekolah',
            'gelombang' => $data_gelombang
        ];

        return view('admin/v_detail_gelombang', $data);
    }

    public function editData($id)
    {
        $data = [
            'id' => $id,
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'detail' => $this->request->getPost('detail'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telp' => $this->request->getPost('no_telp'),
            'kota' => $this->request->getPost('kota'),
        ];
        $this->ModelSekolah->editData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Edit !!');
        return redirect()->to('Admin/profile');
    }

    public function listDiterima()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Pendaftaran Diterima',
        ];
        return view('Admin/v_diterima', $data);
    }

    public function listDitolak()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Pendaftaran Ditolak',
        ];
        return view('Admin/v_ditolak', $data);
    }
}
