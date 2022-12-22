<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('jenisbayar', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('jenisbayar/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Jenis</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($jenisbayar as $jb) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $jb['kode_jenis']; ?></td>
                                        <td><?= $jb['jenis_bayar']; ?></td>
                                        <td>Rp<?= number_format($jb['jml']); ?></td>
                                        <td>
                                            <a href="<?= base_url('jenisbayar/edit/') . $jb['kode_jenis']; ?>" class="badge badge-success"> Edit</a>
                                            <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('jenisbayar/delete/') . $jb['kode_jenis']; ?>" class="badge badge-danger">Hapus</a>
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