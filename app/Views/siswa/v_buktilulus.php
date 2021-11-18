<?php

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;
?>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-color: black;
        border-spacing: 0;
        border-style: solid;
        border-width: 1px;
    }

    .tg td {
        border-style: solid;
        border-width: 0px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-style: solid;
        border-width: 0px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-lboi {
        border-color: inherit;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-2hze {
        border-color: inherit;
        font-size: large;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-zuo2 {
        border-color: inherit;
        font-size: xx-large;
        font-weight: bold;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-tg4h {
        border-color: inherit;
        font-size: large;
        text-align: right;
        vertical-align: middle
    }

    .tg .tg-9w9c {
        border-color: inherit;
        font-size: xx-large;
        font-weight: bold;
        text-align: center;
        vertical-align: middle
    }

    .tg .tg-vlgb {
        background-color: #340096;
        border-color: inherit;
        color: #f8ff00;
        font-size: x-large;
        font-weight: bold;
        text-align: center;
        vertical-align: middle
    }

    .tg .tg-kgfn {
        background-color: #340096;
        border-color: inherit;
        color: #f8ff00;
        font-size: x-large;
        font-weight: bold;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-5up1 {
        border-color: inherit;
        font-size: medium;
        font-weight: bold;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-34vk {
        border-color: inherit;
        font-size: x-large;
        font-weight: bold;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-jrpd {
        border-color: inherit;
        font-size: x-large;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-c3ow {
        border-color: inherit;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-la89 {
        background-color: #340096;
        border-color: inherit;
        color: #f8ff00;
        font-size: xx-large;
        font-weight: bold;
        text-align: center;
        vertical-align: middle
    }

    .tg .tg-ursr {
        border-color: inherit;
        font-size: large;
        font-weight: bold;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-ixdq {
        border-color: inherit;
        font-weight: bold;
        position: -webkit-sticky;
        position: sticky;
        text-align: center;
        top: -1px;
        vertical-align: middle;
        will-change: transform
    }

    .tg .tg-axi0 {
        border-color: inherit;
        font-size: large;
        text-align: center;
        vertical-align: middle
    }

    .tg .tg-puac {
        border-color: inherit;
        font-size: medium;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-mww1 {
        border-color: inherit;
        font-size: x-large;
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-yz93 {
        border-color: inherit;
        text-align: right;
        vertical-align: middle
    }

    .tg .tg-hima {
        border-color: inherit;
        font-size: x-large;
        font-weight: bold;
        text-align: center;
        vertical-align: middle
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-kqld {
        border-color: inherit;
        font-size: large;
        text-align: right;
        vertical-align: top
    }

    .tg .tg-tbqi {
        border-color: inherit;
        font-size: large;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-0mog {
        border-color: inherit;
        font-size: x-large;
        font-weight: bold;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-dvpl {
        border-color: inherit;
        text-align: right;
        vertical-align: top
    }

    .tg-sort-header::-moz-selection {
        background: 0 0
    }

    .tg-sort-header::selection {
        background: 0 0
    }

    .tg-sort-header {
        cursor: pointer
    }

    .tg-sort-header:after {
        content: '';
        float: right;
        margin-top: 7px;
        border-width: 0 5px 5px;
        border-style: solid;
        border-color: #404040 transparent;
        visibility: hidden
    }

    .tg-sort-header:hover:after {
        visibility: visible
    }

    .tg-sort-asc:after,
    .tg-sort-asc:hover:after,
    .tg-sort-desc:after {
        visibility: visible;
        opacity: .4
    }

    .tg-sort-desc:after {
        border-bottom: none;
        border-width: 5px 5px 0
    }

    @media screen and (max-width: 767px) {
        .tg {
            width: auto !important;
        }

        .tg col {
            width: auto !important;
        }

        .tg-wrap {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
    }
</style>
<div class="tg-wrap">
    <table id="tg-Wc0tu" class="tg" style="undefined;table-layout: fixed; width: 1632px">
        <colgroup>
            <col style="width: 24.56667px">
            <col style="width: 94.56667px">
            <col style="width: 68.56667px">
            <col style="width: 68.56667px">
            <col style="width: 24.56667px">
            <col style="width: 72.56667px">
            <col style="width: 72.56667px">
            <col style="width: 38.56667px">
            <col style="width: 76.56667px">
            <col style="width: 76.56667px">
            <col style="width: 70.56667px">
            <col style="width: 69.56667px">
            <col style="width: 69.56667px">
            <col style="width: 24.56667px">
            <col style="width: 30.56667px">
            <col style="width: 65.56667px">
            <col style="width: 65.56667px">
            <col style="width: 84.56667px">
            <col style="width: 59.56667px">
            <col style="width: 43.56667px">
            <col style="width: 93.56667px">
            <col style="width: 93.56667px">
            <col style="width: 101.56667px">
            <col style="width: 47.56667px">
            <col style="width: 69.56667px">
            <col style="width: 24.56667px">
        </colgroup>
        <thead>
            <tr>
                <th class="tg-ixdq"></th>
                <th class="tg-ixdq" colspan="24"></th>
                <th class="tg-ixdq"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi" colspan="4" rowspan="5">
                    <img src="<?= base_url() ?>/logo/<?= $setting['logo'] ?>" alt="AdminLTE Logo" width="220px" height="220px">
                </td>
                <td class="tg-zuo2" colspan="12">SMK PUTRA INDONESIA MALANG</td>
                <td class="tg-la89" colspan="8">FORMULIR PENDAFTARAN</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-puac" colspan="10">Jl. Barito No 5 Malang Telp 0341 491132, 0341 492052 Fax 485411<br></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-la89" colspan="8">PENERIMA PESERTA DIDIK BARU</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-puac" colspan="8">Email : smk.putraindonesiamalang@gmail.com</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-9w9c" colspan="8">NO PENDAFTARAN</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-puac" colspan="5">Website : www.smkpim.sch.id</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-9w9c" colspan="8"><?= $siswa['no_pendaftaran'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-mww1" colspan="5">KOMPETENSI KEAHLIAN :</td>
                <td class="tg-mww1" colspan="8"><?= $siswa['jurusan'] ?></td>
                <td class="tg-mww1" colspan="5">ALUR PENDAFTARAN</td>
                <td class="tg-mww1" colspan="6"><?= $siswa['jalur_masuk'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi" colspan="4" rowspan="7">
                    <center><br><img src="<?= base_url('foto/' . $siswa['foto']) ?>" width="200px" height="220px"></center>
                </td>
                <td class="tg-lboi"></td>
                <td class="tg-mww1" colspan="7">KELENGKAPAN PENDAFTARAN</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-axi0">1</td>
                <td class="tg-2hze" colspan="10">FC Ijazah / SKHUN / SKL dan Raport Semester 1- 5<br></td>
                <td class="tg-2hze"></td>
                <td class="tg-axi0">6</td>
                <td class="tg-2hze" colspan="5">FC Kartu Ujian Nasional<br></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-axi0">2</td>
                <td class="tg-2hze" colspan="7">Pas Foto Hitam Putih 3x4 (2 Lembar)<br></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-axi0">7</td>
                <td class="tg-2hze" colspan="5">FC Kartu Indonesia Pintar</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-axi0">3</td>
                <td class="tg-2hze" colspan="4">FC Kartu Keluarga</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-axi0">8<br></td>
                <td class="tg-2hze" colspan="4">FC Kartu NISN</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-axi0">4</td>
                <td class="tg-2hze" colspan="4">FC KTP Orang Tua</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-axi0">9</td>
                <td class="tg-2hze" colspan="6">Surat Ket Sehat dan Tidak Buta Warna</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-axi0">5</td>
                <td class="tg-2hze" colspan="6">FC Akta Kelahiran Pendaftar</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-axi0">10</td>
                <td class="tg-2hze" colspan="5">FC Sertifikat Prestasi</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-34vk" colspan="8">A. DATA DIRI CALON PESERTA DIDIK </td>
                <td class="tg-34vk"></td>
                <td class="tg-34vk"></td>
                <td class="tg-34vk"></td>
                <td class="tg-34vk"></td>
                <td class="tg-34vk"></td>
                <td class="tg-34vk"></td>
                <td class="tg-34vk"></td>
                <td class="tg-34vk" colspan="9">B. DATA AYAH</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">NAMA</td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['nama_lengkap'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="2">NAMA </td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['nama_ayah'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">TEMPAT LAHIR </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="2"><?= $siswa['tempat_lahir'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="3">ALAMAT </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="4"><?= $siswa['alamat_ayah'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">TANGGAL LAHIR </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="2"><?= $siswa['tgl_lahir'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="3">PEKERJAAN </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['pekerjaan_ayah'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">JENIS KELAMIN </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['jk'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="2">NO HP </td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['no_telpon_ayah'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="2">AGAMA </td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="2"><?= $siswa['agama'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">ALAMAT ASAL </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['alamat'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-34vk" colspan="9">C. DATA IBU</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="3">Kecamatan </td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['nama_kecamatan'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="2">NAMA</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['nama_ibu'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="4">Kota/Kabupaten </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['nama_kabupaten'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="3">ALAMAT </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['alamat_ibu'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="2">Provinsi </td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['nama_provinsi'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="3">PEKERJAAN </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['pekerjaan_ibu'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="2">NO HP </td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['no_telpon_ibu'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze">NISN</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['nisn'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-ursr" colspan="9">Saya menyatakan bahwa seluruh isian formulir ini</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="2">NO HP</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="2"><?= $siswa['no_telpon'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-ursr" colspan="9">telah saya isi dengan benar adanya. Saya bersedia</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="2"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="3"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-ursr" colspan="9">menanggung seluruh sanksi yang akan dikenakan</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-ursr" colspan="9">apabila ada informasi yang saya palsukan / tidak benar</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-34vk" colspan="3">D. DATA SEKOLAH</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">NAMA SEKOLAH </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="5"><?= $siswa['asal_sekolah'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="2">Pendaftar</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="2">ALAMAT</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze">0</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="8"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="2">NO TELP</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze">0</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">TAHUN LULUS </td>
                <td class="tg-2hze">:</td>
                <td class="tg-2hze" colspan="3"><?= $siswa['tahun_lulus'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-34vk" colspan="6"><?= $siswa['nama_lengkap'] ?></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-vlgb" colspan="24">SURAT PERNYATAAN</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="11">Yang bertandatangan di bawah ini kami orang tua calon peserta didik</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="3">Menyatakan</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-tg4h">1</td>
                <td class="tg-2hze" colspan="16">Menyetujui dan mengijinkan anak kami mengikuti pendidikan di SMK Putra Indonesia Malang</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-tg4h">2.</td>
                <td class="tg-2hze" colspan="5">Bila anak kami diterima di</td>
                <td class="tg-2hze" colspan="3">Gelombang</td>
                <td class="tg-34vk" colspan="6"><?= $siswa['jalur_masuk'] ?></td>
                <td class="tg-lboi"></td>
                <td class="tg-2hze" colspan="8">Kami bersedia membayar :</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-yz93"></td>
                <td class="tg-vlgb" colspan="4">Jalur Pendaftaran</td>
                <td class="tg-vlgb" colspan="4">DPSP</td>
                <td class="tg-vlgb" colspan="4">DPS</td>
                <td class="tg-vlgb" colspan="4">BPK / Bulan</td>
                <td class="tg-vlgb" colspan="4">Pendaftaran</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-yz93"></td>
                <td class="tg-hima" colspan="4"><?= $siswa['jalur_masuk'] ?></td>
                <td class="tg-hima" colspan="4"><?= $siswa['dpsp'] ?></td>
                <td class="tg-hima" colspan="4"><?= $siswa['dps'] ?></td>
                <td class="tg-hima" colspan="4"><?= $siswa['bopp'] ?></td>
                <td class="tg-hima" colspan="4"><?= $siswa['formulir'] ?></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-tg4h">3</td>
                <td class="tg-2hze" colspan="21">Apabila anak kami mengundurkan diri karena suatu hal, maka kami tidak akan meminta kembali uang yang telah dibayarkan</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-tg4h">4</td>
                <td class="tg-2hze" colspan="10">Besedia membayar biaya daftar ulang tepat waktu sesuai ketentuan</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="9">Malang,2021-09-29</td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="4">Petugas Pendaftaran</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-lboi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-ursr" colspan="9">HELMI SAMBORA</td>
                <td class="tg-ursr"></td>
                <td class="tg-ursr"></td>
                <td class="tg-ursr"></td>
                <td class="tg-ursr"></td>
                <td class="tg-ursr"></td>
                <td class="tg-ursr" colspan="9"><?= $siswa['nama_ayah'] ?></td>
                <td class="tg-lboi"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>
            <tr>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
                <td class="tg-0lax"></td>
            </tr>

            <!-- Halaman 2 -->

            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-c3ow"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-c3ow"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-5up1" colspan="6">Contact Person : 08121770930</td>
                <td class="tg-5up1" colspan="7">Makerma : 0341 485411 ext 6</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-lboi" colspan="4" rowspan="5">
                    <img src="<?= base_url() ?>/logo/<?= $setting['logo'] ?>" width="220px" height="220px">
                </td>
                <td class="tg-zuo2" colspan="12">SMK PUTRA INDONESIA MALANG</td>
                <td class="tg-la89" colspan="8">SURAT PERNYATAAN</td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-puac" colspan="10">Jl. Barito No 5 Malang Telp 0341 491132, 0341 492052 Fax 485411</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-la89" colspan="8">KESANGGUPAN DAFTAR ULANG</td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-puac" colspan="8">Email : smk.putraindonesiamalang@gmail.com</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-9w9c" colspan="8">NO PENDAFTARAN</td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-puac" colspan="5">Website : www.smkpim.sch.id</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-9w9c" colspan="8"><?= $siswa['no_pendaftaran'] ?></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-34vk" colspan="5">KOMPETENSI KEAHLIAN :</td>
                <td class="tg-34vk" colspan="8"><?= $siswa['jurusan'] ?></td>
                <td class="tg-34vk" colspan="5">ALUR PENDAFTARAN</td>
                <td class="tg-34vk" colspan="6"><?= $siswa['jalur_masuk'] ?></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-2hze" colspan="14">Yang bertandatangan di bawah ini kami orang tua calon peserta didik</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-2hze" colspan="4">Nama Ortu / Wali</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-34vk" colspan="3"><?= $siswa['nama_ayah'] ?></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-2hze" colspan="5">Nama calon peserta didik</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze">:</td>
                <td class="tg-34vk" colspan="6"><?= $siswa['nama_lengkap'] ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-2hze" colspan="6">dengan ini saya menyatakan</td>
                <td class="tg-2hze"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-kqld">1</td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze" colspan="15">Bersedia dan sanggup melakukan pembayaran biaya pendidikan jalur</td>
                <td class="tg-0mog" colspan="7"><?= $siswa['jalur_masuk'] ?></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-kqld"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze" colspan="10">dengan ketentuan dan rincian sebagai berikut :</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-kqld"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tg4h">-</td>
                <td class="tg-2hze" colspan="12">Dana Pengembangan Sarana dan Prasarana (DPSP)</td>
                <td class="tg-tbqi">:</td>
                <td class="tg-tbqi" colspan="5"><?= $siswa['dpsp'] ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-kqld"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tg4h">-</td>
                <td class="tg-2hze" colspan="12">Biaya Operasional Proses Pembelajaran (BOPP)</td>
                <td class="tg-tbqi">:</td>
                <td class="tg-tbqi" colspan="5"><?= $siswa['bopp'] ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-kqld"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tg4h">-</td>
                <td class="tg-2hze" colspan="12">Dana Perlengkapan Siswa (DPS)</td>
                <td class="tg-tbqi">:</td>
                <td class="tg-tbqi" colspan="5"><?= $siswa['dps'] ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-dvpl"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0mog" colspan="2">TOTAL</td>
                <td class="tg-jrpd"></td>
                <td class="tg-jrpd"></td>
                <td class="tg-kgfn" colspan="5"><?= $siswa['formulir'] ?></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-dvpl"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-dvpl"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0mog" colspan="4">Total biaya sebesar</td>
                <td class="tg-0mog" colspan="5"><?= $siswa['formulir'] ?></td>
                <td class="tg-0mog" colspan="5">dibayarkan maksimal pada</td>
                <td class="tg-0mog" colspan="4">31 Maret 2021</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-dvpl"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h">2</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="21">Saya tidak akan mengajukan permohonan keringanan atau dispensasi pembiayaan dalam bentuk apapun</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="11">kepada pihak sekolah selama proses pendidikan.</td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h">3</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="21">Saya tidak akan meminta kembali uang pembayaran daftar ulang apabila saya mengundurkan diri</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="15">sebagai Siswa SMK Putra Indonesia Malang dengan alasan apapun.</td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-2hze" colspan="24">Demikian surat pernyataan ini saya buat dengan penuh kesadaran dan tanpa ada paksaan dari pihak mana pun.</td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-2hze" colspan="4">Catatan Lain-lain :</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="4">Malang,21 oktober 2021</td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h">-</td>
                <td class="tg-2hze" colspan="9">Dana Perlengkapan Siswa (DPS) sudah termasuk</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze" colspan="4">yang menyatakan</td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h"></td>
                <td class="tg-2hze" colspan="10">Seragam, Perlengkapan Praktikum, MPLS, Asuransi</td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h"></td>
                <td class="tg-2hze" colspan="11">kecelakaan selama menempuh pendidikan, Buku Pembelajaran</td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h">-</td>
                <td class="tg-2hze" colspan="10">Pengambilan seragam akan diinformasikan melalui</td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze" colspan="3">Materai 10000</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h"></td>
                <td class="tg-2hze" colspan="7">nomor HP orang tua atau peserta didik</td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-tg4h">-</td>
                <td class="tg-2hze" colspan="11">Awal Masuk sekolah akan diinformasikan ketika pengambilan</td>
                <td class="tg-tbqi"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-2hze"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-tbqi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-yz93"></td>
                <td class="tg-2hze" colspan="2">seragam.</td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-lboi"></td>
                <td class="tg-34vk" colspan="4"><?= $siswa['nama_ayah'] ?></td>
                <td class="tg-lboi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-yz93">-</td>
                <td class="tg-2hze" colspan="11">Pembayaran bisa dilakukan secara tranfer ke Rekening Mandiri</td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-yz93"></td>
                <td class="tg-2hze" colspan="10">a/n Yayasan Putera Indonesia Malang 144-00-0616368-4</td>
                <td class="tg-lboi"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
            <tr>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
                <td class="tg-0pky"></td>
            </tr>
        </tbody>
    </table>
</div>
<script charset="utf-8">
    var TGSort = window.TGSort || function(n) {
        "use strict";

        function r(n) {
            return n ? n.length : 0
        }

        function t(n, t, e, o = 0) {
            for (e = r(n); o < e; ++o) t(n[o], o)
        }

        function e(n) {
            return n.split("").reverse().join("")
        }

        function o(n) {
            var e = n[0];
            return t(n, function(n) {
                for (; !n.startsWith(e);) e = e.substring(0, r(e) - 1)
            }), r(e)
        }

        function u(n, r, e = []) {
            return t(n, function(n) {
                r(n) && e.push(n)
            }), e
        }
        var a = parseFloat;

        function i(n, r) {
            return function(t) {
                var e = "";
                return t.replace(n, function(n, t, o) {
                    return e = t.replace(r, "") + "." + (o || "").substring(1)
                }), a(e)
            }
        }
        var s = i(/^(?:\s*)([+-]?(?:\d+)(?:,\d{3})*)(\.\d*)?$/g, /,/g),
            c = i(/^(?:\s*)([+-]?(?:\d+)(?:\.\d{3})*)(,\d*)?$/g, /\./g);

        function f(n) {
            var t = a(n);
            return !isNaN(t) && r("" + t) + 1 >= r(n) ? t : NaN
        }

        function d(n) {
            var e = [],
                o = n;
            return t([f, s, c], function(u) {
                var a = [],
                    i = [];
                t(n, function(n, r) {
                    r = u(n), a.push(r), r || i.push(n)
                }), r(i) < r(o) && (o = i, e = a)
            }), r(u(o, function(n) {
                return n == o[0]
            })) == r(o) ? e : []
        }

        function v(n) {
            if ("TABLE" == n.nodeName) {
                for (var a = function(r) {
                        var e, o, u = [],
                            a = [];
                        return function n(r, e) {
                            e(r), t(r.childNodes, function(r) {
                                n(r, e)
                            })
                        }(n, function(n) {
                            "TR" == (o = n.nodeName) ? (e = [], u.push(e), a.push(n)) : "TD" != o && "TH" != o || e.push(n)
                        }), [u, a]
                    }(), i = a[0], s = a[1], c = r(i), f = c > 1 && r(i[0]) < r(i[1]) ? 1 : 0, v = f + 1, p = i[f], h = r(p), l = [], g = [], N = [], m = v; m < c; ++m) {
                    for (var T = 0; T < h; ++T) {
                        r(g) < h && g.push([]);
                        var C = i[m][T],
                            L = C.textContent || C.innerText || "";
                        g[T].push(L.trim())
                    }
                    N.push(m - v)
                }
                t(p, function(n, t) {
                    l[t] = 0;
                    var a = n.classList;
                    a.add("tg-sort-header"), n.addEventListener("click", function() {
                        var n = l[t];
                        ! function() {
                            for (var n = 0; n < h; ++n) {
                                var r = p[n].classList;
                                r.remove("tg-sort-asc"), r.remove("tg-sort-desc"), l[n] = 0
                            }
                        }(), (n = 1 == n ? -1 : +!n) && a.add(n > 0 ? "tg-sort-asc" : "tg-sort-desc"), l[t] = n;
                        var i, f = g[t],
                            m = function(r, t) {
                                return n * f[r].localeCompare(f[t]) || n * (r - t)
                            },
                            T = function(n) {
                                var t = d(n);
                                if (!r(t)) {
                                    var u = o(n),
                                        a = o(n.map(e));
                                    t = d(n.map(function(n) {
                                        return n.substring(u, r(n) - a)
                                    }))
                                }
                                return t
                            }(f);
                        (r(T) || r(T = r(u(i = f.map(Date.parse), isNaN)) ? [] : i)) && (m = function(r, t) {
                            var e = T[r],
                                o = T[t],
                                u = isNaN(e),
                                a = isNaN(o);
                            return u && a ? 0 : u ? -n : a ? n : e > o ? n : e < o ? -n : n * (r - t)
                        });
                        var C, L = N.slice();
                        L.sort(m);
                        for (var E = v; E < c; ++E)(C = s[E].parentNode).removeChild(s[E]);
                        for (E = v; E < c; ++E) C.appendChild(s[v + L[E - v]])
                    })
                })
            }
        }
        n.addEventListener("DOMContentLoaded", function() {
            for (var t = n.getElementsByClassName("tg"), e = 0; e < r(t); ++e) try {
                v(t[e])
            } catch (n) {}
        })
    }(document)
</script>
<!-- Print -->
<script>
    window.addEventListener("load", window.print());
</script>