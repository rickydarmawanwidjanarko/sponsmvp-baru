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
        echo view('v_login-user');
    }

    public function cek_login_user()
    {
        if ($this->validate([
            'user' => [
                'label' => 'User',
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
            $user = $this->request->getPost('user');
            $password = $this->request->getPost('password');
            $cek_login = $this->ModelAuth->login_user($user, $password);
            if ($cek_login) {
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('user', $cek_login['user']);
                session()->set('level', 'Admin');
                return redirect()->to(base_url('Admin'));
            } else {
                session()->setFlashdata('pesan', 'User atau Password Salah !!!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('nama_user');
        session()->remove('user');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Logout Succses');
        return redirect()->to(base_url('auth/login'));
    }
}
