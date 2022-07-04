<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('dispensasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('dispensasi/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode dispensasi</th>
                                    <th>No. Induk</th>
                                    <th width="200">Nama Dispensasi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($dispensasi as $d) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $d['kode_dispensasi']; ?></td>
                                        <td><?= $d['no_induk']; ?></td>
                                        <td><?= $d['nama_dispensasi']; ?></td>
                                        <td>
                                            <?php if ($d['status'] == 1) {
                                                echo 'Diterima';
                                            } else if ($d['status'] == 2) {
                                                echo 'Ditolak';
                                            } else {
                                                echo 'Menunggu validasi';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('dispensasi/details/') . $d['kode_dispensasi']; ?>" class="badge badge-info"> Detail</a>
                                            <a href="<?= base_url('dispensasi/edit/') . $d['kode_dispensasi']; ?>" class="badge badge-success"> Edit</a>
                                            <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('dispensasi/delete/') . $d['kode_dispensasi']; ?>" class="badge badge-danger">Hapus</a>
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