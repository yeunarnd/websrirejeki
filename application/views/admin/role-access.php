<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <?= $this->session->flashdata('message'); ?>

            <h5>Role : <?= $role['role']; ?></h5>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('daftar/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>

                    <a class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                        <select name="" id="daftar">
                            <option value="0">Tampil Semua</option>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Access</th>
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

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                </div>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->