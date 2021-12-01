<?php

namespace App\Controllers;

use App\Models\ModelRegister;

class Register extends BaseController
{
    public function __construct()
    {
        $this->ModelRegister = new ModelRegister();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Register',
            'validation' =>  \Config\Services::validation(),
        ];
        return view('v_register', $data);
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
            'email'       => [
                'label' => 'Email',
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
            'kota'       => [
                'label' => 'Kota',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi!'
                ]
            ],
        ])) {
            //Jika Tidak ada validasi maka simpan data


            $data = [

                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'alamat' => $this->request->getPost('alamat'),
                'kota' => $this->request->getPost('kota'),
                'password' => date('d - m - Y'),
            ];
            $this->ModelRegister->insertData($data);
            session()->setFlashdata('pesan', 'Registrasi Berhasil, Silahkan Login');
            return redirect()->to('Register/');
        } else {
            //Jika ada validasi
            $validation =  \Config\Services::validation();
            return redirect()->to('Register/')->withInput()->with('validation', $validation);
        }
    }
}
