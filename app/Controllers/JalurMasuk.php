<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModeljalurMasuk;

class JalurMasuk extends BaseController
{
    public function __construct()
    {
        $this->ModelJalurMasuk = new ModelJalurMasuk();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'Jalur Masuk',
            'jalurmasuk' => $this->ModelJalurMasuk->getAllData(),
        ];
        return view('admin/v_jalur-masuk', $data);
    }

    public function insertData()
    {
        $data = [
            'jalur_masuk' => $this->request->getPost('jalur_masuk'),
            'formulir' => $this->request->getPost('formulir'),
            'dpsp' => $this->request->getPost('dpsp'),
            'dpp' => $this->request->getPost('dpp'),
            'bopp' => $this->request->getPost('bopp'),
            'promo' => $this->request->getPost('promo'),
            'kuota' => $this->request->getPost('kuota'),
        ];
        $this->ModelJalurMasuk->insertData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambahkan !!');
        return redirect()->to('/JalurMasuk');
    }

    public function editData($id_jalur_masuk)
    {
        $data = [
            'id_jalur_masuk' => $id_jalur_masuk,
            'jalur_masuk' => $this->request->getPost('jalur_masuk'),
            'formulir' => $this->request->getPost('formulir'),
            'dpsp' => $this->request->getPost('dpsp'),
            'dps' => $this->request->getPost('dps'),
            'bopp' => $this->request->getPost('bopp'),
            'promo' => $this->request->getPost('promo'),
            'kuota' => $this->request->getPost('kuota'),
        ];
        $this->ModelJalurMasuk->editData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambahkan !!');
        return redirect()->to('/JalurMasuk');
    }

    public function deleteData($id_jalur_masuk)
    {
        $data = [
            'id_jalur_masuk' => $id_jalur_masuk,
        ];
        $this->ModelJalurMasuk->deleteData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambahkan !!');
        return redirect()->to('/JalurMasuk');
    }
}
