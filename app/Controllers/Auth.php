<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
        helper('form');
    }

    public function index()
    {
    }

    public function login()
    {
        echo view('v_login');
    }

    public function loginuser()
    {
        echo view('v_login-user');
    }

    public function loginsiswa()
    {
        echo view('v_loginSiswa');
    }

    public function cek_login_user()
    {
        if ($this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib diisi !!',
                ],
            ]
        ])) {
            //valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Cek login sekolah
            $cek_login = $this->ModelAuth->login_sekolah($email, $password);
            if ($cek_login) {
                session()->set('nama', $cek_login['nama']);
                session()->set('email', $cek_login['email']);
                session()->set('level', 'Admin');
                return redirect()->to(base_url('Admin'));
            } else {
                $cek_login = $this->ModelAuth->login_siswa($email, $password);
                if ($cek_login) {
                    session()->set('nama', $cek_login['nama']);
                    session()->set('email', $cek_login['email']);
                    session()->set('level', 'Siswa');
                    return redirect()->to(base_url('Siswa'));
                } else {
                    session()->setFlashdata('pesan', 'User atau Password Salah !!!');
                    return redirect()->to(base_url('auth/login'));
                }
            }
        } else {
            //tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('nama');
        session()->remove('email');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Logout Succses');
        return redirect()->to(base_url('auth/login'));
    }
    public function logout_siswa()
    {
        session()->remove('nama');
        session()->remove('email');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Logout Succses');
        return redirect()->to(base_url('auth/login'));
    }
}
