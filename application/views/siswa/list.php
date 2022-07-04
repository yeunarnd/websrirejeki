<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('siswa', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('siswa/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor Induk</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Kelompok Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($siswa as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['nomor_induk']; ?></td>
                                        <td width="300"><?= $s['nama_siswa']; ?></td>
                                        <td><?= $s['jenis_kelamin']; ?></td>
                                        <td><?= $s['alamat']; ?></td>
                                        <td><?= $s['kelompok_kelas']; ?></td>
                                        <td>
                                            <a href="<?= base_url('siswa/edit/') . $s['id']; ?>" class="badge badge-success"> Edit</a>
                                            <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('siswa/delete/') . $s['id']; ?>" class="badge badge-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->