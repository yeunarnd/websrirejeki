<link href="<?= base_url('front-end/assets/img/logo-paud.png'); ?>" rel="icon">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('daftar', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('daftar/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>

                    <a class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <select name="" class="btn btn-default border border-dark" id="daftar">
                            <option value="0" class="text-gray-800">Tampil Semua</option>
                            <option value="1">2022</option>
                        </select>
                    </a>
                    <a href="<?= base_url('daftar/export_pendaftaran') ?>" class="btn btn-secondary" style="float:right"><i class="fa fa-download"></i> Unduh Laporan</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Nama Calon Siswa</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($daftar as $daftar) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td>
                                            <?= $daftar['tgl_daftar']; ?>
                                        </td>
                                        <td>
                                            <?= $daftar['nm_calon_siswa']; ?>
                                        </td>
                                        <td>
                                            <?php if ($daftar['status'] == 1) {
                                                echo 'Tervalidasi';
                                            } else if ($daftar['status'] == 2) {
                                                echo 'Ditolak';
                                            } else {
                                                echo 'Menunggu validasi';
                                            }
                                            ?>
                                        </td>
                                        <td width="250">
                                            <a href="<?= base_url('daftar/details/') . $daftar['kd_daftar']; ?>" class="badge badge-info"> Detail</a>
                                            <a href="<?= base_url('daftar/edit/') . $daftar['kd_daftar']; ?>" class="badge badge-success"> Edit</a>
                                            <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('daftar/delete/') . $daftar['kd_daftar']; ?>" class="badge badge-danger">Hapus</a>
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

<!-- Modal -->
<!-- <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> -->