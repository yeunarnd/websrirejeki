<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal Daftar</th>
            <th>Nama Siswa</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
        </tr>
    </thead>

    <tbody>

        <?php $i = 1; ?>
        <?php foreach ($daftar->result() as $df) : ?>
            <tr>
                <td>
                    <?= $df['tgl_daftar']; ?>
                </td>
                <td>
                    <?= $df['nama_siswa']; ?>
                </td>
                <td>
                    <?= $df['umur']; ?>
                </td>
                <td>
                    <?= $df['kelas']; ?>
                </td>
                <td>
                    <?= $df['tempat_lahir']; ?>
                </td>
                <td>
                    <?= $df['tgl_lahir']; ?>
                </td>
                <td>
                    <?= $df['jkel']; ?>
                </td>
                <td>
                    <?= $df['agama']; ?>
                </td>
                <td>
                    <?= $df['alamat']; ?>
                </td>
            </tr>

            <?php $i++; ?>
        <?php endforeach; ?>
    </tbody>

</table>