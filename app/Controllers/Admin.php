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
        $pendaftar = $this->ModelPendaftaran->getPendaftar($this->id_sekolah, false, '3');
        $data = [
            'title' => 'List',
            'subtitle' => 'Pendaftaran',
            'siswa' => $pendaftar
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
        $pendaftar = $this->ModelPendaftaran->getPendaftar($this->id_sekolah, false, '1');
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Pendaftaran Diterima',
            'siswa' => $pendaftar

        ];
        return view('Admin/v_diterima', $data);
    }

    public function listDitolak()
    {
        $pendaftar = $this->ModelPendaftaran->getPendaftar($this->id_sekolah, false, '2');
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Pendaftaran Ditolak',
            'siswa' => $pendaftar
        ];
        return view('Admin/v_ditolak', $data);
    }

    public function accept($id)
    {
        $data = [
            'id' => $id,
            'status' => $this->ModelPendaftaran::DITERIMA
        ];

        $this->ModelPendaftaran->save($data);

        session()->setFlashdata('pesan', 'Pendaftar telah diterima');
        return redirect()->to(base_url('Admin/list_pendaftar'));
    }

    public function reject($id)
    {
        $data = [
            'id' => $id,
            'status' => $this->ModelPendaftaran::DITOLAK
        ];

        $this->ModelPendaftaran->save($data);

        session()->setFlashdata('pesan', 'Pendaftar telah ditolak');
        return redirect()->to(base_url('Admin/list_pendaftar'));
    }

    public function download($id)
    {
        $data = $this->ModelPendaftaran->find($id);
        return $this->response->download('dokumen/' . $data['dokumen'], null);
    }
}
