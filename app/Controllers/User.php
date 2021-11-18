<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class user extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle' => 'user',
            'user' => $this->ModelUser->getAllData(),
        ];
        return view('admin/v_user', $data);
    }
    public function insertData()
    {
        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'user' => $this->request->getPost('user'),
            'password' => $this->request->getPost('password'),
            'foto' => $nama_file
        ];
        // Upload File Foto
        $file->move('foto/', $nama_file);

        $this->ModelUser->insertData($data);
        session()->setFlashdata('tambah', 'Data Berhasil Di Tambahkan !!');
        return redirect()->to('/user');
    }

    public function editData($id_user)
    {

        $file = $this->request->getFile('foto');
        if ($file->getError() == 4) {
            $data = [
                'id_user' => $id_user,
                'nama_user' => $this->request->getPost('nama_user'),
                'user' => $this->request->getPost('user'),
                'password' => $this->request->getPost('password'),
            ];
            $this->ModelUser->editData($data);
        } else {
            $user = $this->ModelUser->detailData($id_user);
            if ($user['foto'] !== "") {
                unlink('./foto/' . $user['foto']);
            }


            $nama_file = $file->getRandomName();
            $data = [
                'id_user' => $id_user,
                'nama_user' => $this->request->getPost('nama_user'),
                'user' => $this->request->getPost('user'),
                'password' => $this->request->getPost('password'),
                'foto' => $nama_file
            ];
            // Upload File Foto
            $file->move('foto/', $nama_file);
            $this->ModelUser->editData($data);
        }


        session()->setFlashdata('edit', 'Data Berhasil Di Edit !!');
        return redirect()->to('/user');
    }

    public function deleteData($id_user)
    {
        $user = $this->ModelUser->detailData($id_user);
        if ($user['foto'] !== "") {
            unlink('./foto/' . $user['foto']);
        }
        $data = [
            'id_user' => $id_user,
        ];
        $this->ModelUser->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Di Delete !!');
        return redirect()->to('/user');
    }
}
