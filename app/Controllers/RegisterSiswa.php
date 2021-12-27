<?php

namespace App\Controllers;

use App\Models\ModelRegisterSiswa;

class RegisterSiswa extends BaseController
{
    public function __construct()
    {
        $this->ModelRegisterSiswa = new ModelRegisterSiswa();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'RegisterSiswa',
            'validation' =>  \Config\Services::validation(),
        ];
        return view('v_RegisterSiswa', $data);
    }

    public function simpanPendaftaran()
    {
        if ($this->validate([
            'nama'       => [
                'label' => 'Nama Sekolah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
            'alamat'       => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
            'no_telp'       => [
                'label' => 'Telp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
            'jk'       => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
            'email'       => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
        ])) {
            //Jika Tidak ada validasi maka simpan data

            $data = [
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'no_telp' => $this->request->getPost('no_telp'),
                'jk' => $this->request->getPost('jk'),
                'email' => $this->request->getPost('email'),
                'password' => date('dmY'),
            ];
            // die;
            $this->ModelRegisterSiswa->insertData($data);
            session()->setFlashdata('pesan', 'Registrasi Berhasil, Silahkan hubungi Customer Service untuk mendapatkan password');
            return redirect()->to('Auth/loginsiswa');
        } else {
            //Jika ada validasi
            $validation =  \Config\Services::validation();
            // echo "<pre>";
            // print_r($validation);
            // die;
            return redirect()->to('RegisterSiswa')->withInput()->with('validation', $validation);
        }
    }
}
