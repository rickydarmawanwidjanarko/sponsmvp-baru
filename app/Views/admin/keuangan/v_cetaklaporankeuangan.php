<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls");
?>

<html>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>No Pendaftaran</th>
                <th>Tanggal Daftar</th>
                <th>Jurusan</th>
                <th>Jalur Masuk</th>
                <th>Nama</th>
                <th>Formulir</th>
                <th>DPSP</th>
                <th>DPS</th>
                <th>BOPP</th>
                <th>Potongan</th>
                <th>Piutang</th>
                <th>Total</th>


            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($siswa as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['no_pendaftaran'] ?></td>
                    <td><?= $value['tgl_pendaftaran'] ?></td>
                    <td><?= $value['jurusan'] ?></td>
                    <td><?= $value['jalur_masuk'] ?></td>
                    <td><?= $value['nama_lengkap'] ?></td>
                    <td><?= $value['formulir'] ?></td>
                    <td><?= $value['dpsp'] ?></td>
                    <td><?= $value['dps'] ?></td>
                    <td><?= $value['bopp'] ?></td>
                    <td>Potongan</td>
                    <td>Piutang</td>
                    <td>Total</td>
                <?php } ?>
        </tbody>
    </table>
    </table>
</body>


</html>