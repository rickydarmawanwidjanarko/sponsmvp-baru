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
        $gelombangs = array();
        $data_gelombang = $this->ModelGelombang->getGelombang($this->id_sekolah);
        foreach ($data_gelombang as $k => $v) {
            $gelombangs[] = $v['id'];
        }
        $data_sekolah = $this->ModelSekolah->getSekolah($this->id_sekolah);
        $jml_gelombang = $this->ModelGelombang->getJumlah($this->id_sekolah);
        $jml_pendaftar = $this->ModelPendaftaran->getJumlahPendaftar($gelombangs, '0');
        $jml_diterima = $this->ModelPendaftaran->getJumlahPendaftar($gelombangs, '1');
        $jml_ditolak = $this->ModelPendaftaran->getJumlahPendaftar($gelombangs, '2');

        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Dashboard',
            'jml_gelombang' => $jml_gelombang,
            'jml_pendaftar' => $jml_pendaftar,
            'jml_diterima' => $jml_diterima,
            'jml_ditolak' => $jml_ditolak,
            'sekolah' => $data_sekolah,
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

    public function edit_sekolah()
    {
        $data_sekolah = $this->ModelSekolah->getSekolah($this->id_sekolah);

        $data = [
            'title' => 'Detail Sekolah',
            'subtitle' => 'Detail Sekolah',
            'school' => $data_sekolah,
            'validation' => \Config\Services::validation(),
        ];

        return view('admin/v_edit_sekolah', $data);
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

    public function create_gelombang()
    {

        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Gelombang',
            'validation' => \Config\Services::validation()
        ];

        return view('Admin/v_create_gelombang', $data);
    }

    public function edit_gelombang($id)
    {
        $data_gelombang = $this->ModelGelombang->getGelombang($this->id_sekolah, $id);
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Gelombang',
            'validation' => \Config\Services::validation(),
            'gelombang' => $data_gelombang
        ];

        return view('Admin/v_edit_gelombang', $data);
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


    public function update_sekolah()
    {
        $id = $this->id_sekolah;

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
            ],
            'logo' => [
                'rules' => 'max_size[logo,1024]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('Admin/edit_sekolah/' . $id)->withInput();
        }

        $fileSampul = $this->request->getFile('logo');
        $folder = 'img/sekolah';
        $data = [
            'id' => $id,
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'password' => $this->request->getPost('password'),
            'no_telp' => $this->request->getPost('no_telp'),
            'kota' => $this->request->getPost('kota')
        ];

        if (!empty($fileSampul)) {
            if ($fileSampul->getError() == 4) {
                // $fileSampul->move($folder);
            } else {
                $namaSampul = $fileSampul->getRandomName();
                $fileSampul->move($folder, $namaSampul);
                $data['logo'] = $namaSampul;
            }
        }

        $this->ModelSekolah->save($data);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        session()->set('foto', $data['logo']);
        return redirect()->to('/Admin/profile');
    }
}
