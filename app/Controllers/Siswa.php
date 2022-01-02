<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGelombang;
use App\Models\ModelPendaftaran;
use App\Models\ModelSiswa;
use App\Models\ModelSekolah;

class Siswa extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSiswa = new ModelSiswa();
        $this->ModelSekolah = new ModelSekolah();
        $this->ModelGelombang = new ModelGelombang();
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->idSiswa = session()->get('id_siswa');
    }

    public function index()
    {
        $jml_sekolah = $this->ModelSekolah->countAll();
        $jml_pendaftar = $this->ModelPendaftaran->getJumlahMendaftar($this->idSiswa, '0');
        $jml_diterima = $this->ModelPendaftaran->getJumlahMendaftar($this->idSiswa, '1');
        $jml_ditolak = $this->ModelPendaftaran->getJumlahMendaftar($this->idSiswa, '2');

        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Dashboard',
            'jml_sekolah' => $jml_sekolah,
            'jml_pendaftar' => $jml_pendaftar,
            'jml_diterima' => $jml_diterima,
            'jml_ditolak' => $jml_ditolak,
        ];
        return view('siswa/v_dashboardsiswa', $data);
    }

    public function biodatasiswa()
    {
        $data = [
            'title' => 'Biodata',
            'subtitle' => 'Siswa',
        ];
        return view('siswa/v_biodatasiswa', $data);
    }

    public function listsekolah()
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'List Sekolah',
            'schools' => $this->ModelSekolah->getSekolah()
        ];
        return view('siswa/v_listsekolah', $data);
    }

    public function datasekolah($id)
    {
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Data Sekolah',
            'school' => $this->ModelSekolah->getSekolah($id),
            'gelombangs' => $this->ModelGelombang->getGelombang($id)
        ];
        return view('siswa/v_datasekolah', $data);
    }

    public function riwayatpendaftaran()
    {
        $pendaftaran = $this->ModelPendaftaran->getPendaftaran($this->idSiswa);
        $status = $this->ModelPendaftaran->getStatus();
        $data = [
            'title' => 'SPONS',
            'subtitle' => 'Riwayat Pendaftaran',
            'pendaftarans' => $pendaftaran,
            'status' => $status
        ];
        return view('siswa/v_riwayatpendaftaran', $data);
    }

    public function get_sekolah()
    {

        $sekolah = $this->ModelSekolah->getSekolah();

        $data = [
            'title' => 'List Sekolah',
            'subtitle' => 'Dashboard',
            'schools' => $sekolah
        ];
        return view('siswa/sekolah', $data);
    }

    public function gelombang($id)
    {
        $gelombang = $this->ModelGelombang->getGelombang(null, $id);
        $pendaftaran = $this->ModelPendaftaran->isDaftar($id, $this->idSiswa);

        $data = [
            'title' => 'List Sekolah',
            'subtitle' => 'Dashboard',
            'gelombang' => $gelombang,
            'pendaftaran' => $pendaftaran
        ];
        return view('siswa/v_gelombang', $data);
    }

    public function pendaftaran()
    {
        $idGelombang = $this->request->getPost('idgelombang');
        $gelombang = $this->ModelGelombang->getGelombang(false, $idGelombang);
        $namaDokumen = '';
        $fileDokumen = $this->request->getFile('dokumen');
        $folder = 'dokumen/';

        if (!empty($fileDokumen)) {
            if ($fileDokumen->getError() == 4) {
            } else {
                $namaDokumen = $fileDokumen->getName();
                $fileDokumen->move($folder, $namaDokumen);
            }
        }

        $data = [
            'idsiswa' => $this->idSiswa,
            'idgelombang' => $idGelombang,
            'waktu' => date('Y-m-d h:i"s'),
            'dokumen' => $namaDokumen,
            'status' => $this->ModelPendaftaran::DIAJUKAN
        ];

        $this->ModelPendaftaran->save($data);
        $this->ModelSekolah->decreaseKuota($gelombang['idsekolah']);
        session()->setFlashdata('pesan', 'Registrasi Berhasil');
        return redirect()->to('Siswa/gelombang/' . $idGelombang);
    }
}
