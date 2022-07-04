<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('pembayaran', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('pembayaran/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode pembayaran</th>
                                    <th width="200">Nama Siswa</th>
                                    <th>Jenis Bayar</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pembayaran as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $p['kode_pembayaran']; ?></td>
                                        <td><?= $p['nama_siswa']; ?></td>
                                        <td><?= $p['jenis_bayar']; ?></td>
                                        <td><?= $p['tgl_pembayaran']; ?></td>
                                        <td><?= $p['jumlah_bayar']; ?></td>
                                        <td>
                                            <a href="<?= base_url('pembayaran/edit/') . $p['kode_pembayaran']; ?>" class="badge badge-success"> Edit</a>
                                            <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('pembayaran/delete/') . $p['kode_pembayaran']; ?>" class="badge badge-danger">Hapus</a>
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