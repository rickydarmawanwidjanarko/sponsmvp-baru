<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGelombang;

class Gelombang extends BaseController
{
    public function __construct()
    {
        $this->ModelGelombang = new ModelGelombang();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Gelombang',
            'gelombang' => $this->ModelGelombang->getGelombang(),
        ];
        return view('Admin/v_list_gelombang', $data);
    }

    public function insertData()
    {
        $data = [
            'gelombang' => $this->request->getPost(),
        ];
        $this->ModelGelombang->insertData($data);
        session()->setFlashdata('tambah', 'Gelombang Berhasil Di Tambahkan !!');
        return redirect()->to('Admin/list_gelombang');
    }

    public function statusAktif($id_ta)
    {
        $data = [
            'id' => $id_ta,
            'status' => 1
        ];
        // $this->ModelGelombang->resetStatus();
        $this->ModelGelombang->editData($data);
        session()->setFlashdata('tambah', 'Status Tahun Ajaran Berhasil Diganti !!');
        return redirect()->to('Admin/list_gelombang');
    }

    public function statusNonaktif($id)
    {
        $data = [
            'id' => $id,
            'status' => 0
        ];
        $this->ModelGelombang->editData($data);
        session()->setFlashdata('tambah', 'Status Tahun Ajaran Berhasil Diganti !!');
        return redirect()->to('Admin/list_gelombang');
    }

    public function save()
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required'
            ]
        ])) {
            return redirect()->to('Admin/create_gelombang')->withInput();
        }

        $this->ModelGelombang->save([
            'idsekolah' => session()->get('id_sekolah'),
            'nama' => $this->request->getVar('nama'),
            'detail' => $this->request->getVar('detail'),
            'persyaratan' => $this->request->getVar('persyaratan'),
            'tglawal' => $this->request->getVar('tglawal'),
            'tglakhir' => $this->request->getVar('tglakhir'),
            'status' => '1',
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('Admin/list_gelombang');
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required'
            ]
        ])) {
            return redirect()->to('Admin/edit_gelombang/' . $id)->withInput();
        }

        $this->ModelGelombang->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'detail' => $this->request->getVar('detail'),
            'persyaratan' => $this->request->getVar('persyaratan'),
            'tglawal' => $this->request->getVar('tglawal'),
            'tglakhir' => $this->request->getVar('tglakhir'),
        ]);

        session()->setFlashdata('pesan', 'Data gelombang berhasil diubah');

        return redirect()->to('/Admin/list_gelombang');
    }


    public function delete($id)
    {
        $this->ModelGelombang->delete($id);
        session()->setFlashdata('pesan', 'Data gelombang berhasil dihapus');
        return redirect()->to('/Admin/list_gelombang');
    }
}
