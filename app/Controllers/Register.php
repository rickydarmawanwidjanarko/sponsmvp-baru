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
            'no_telp'       => [
                'label' => 'Telp',
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
            $fileSampul = $this->request->getFile('logo');
            $folder = 'img/sekolah';
            $namaSampul = 'default.png';

            if (!empty($fileSampul)){
                if ($fileSampul->getError() == 4) {
                    // $fileSampul->move($folder);
                } else {
                    $namaSampul = $fileSampul->getRandomName();
                    $fileSampul->move($folder, $namaSampul);
                }
            }
    
            
            $data = [
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'alamat' => $this->request->getPost('alamat'),
                'password' => date('dmY'),
                'no_telp' => $this->request->getPost('no_telp'),
                'kota' => $this->request->getPost('kota'),
                'logo' => $namaSampul,
            ];
            // die;
            $this->ModelRegister->insertData($data);
            session()->setFlashdata('pesan', 'Registrasi Berhasil, Silahkan hubungi Customer Service untuk mendapatkan password');
            return redirect()->to('Auth/loginuser');
        } else {
            //Jika ada validasi
            $validation =  \Config\Services::validation();
            // echo "<pre>";
            // print_r($validation);
            // die;
            return redirect()->to('Register')->withInput()->with('validation', $validation);
        }
    }
}
