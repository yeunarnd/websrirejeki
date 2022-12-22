<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('pembayaran', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <a href="<?php echo site_url('pembayaran/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                        <!-- <a href="<?= base_url('pembayaran/export_pembayaran') ?>" class="btn btn-secondary" style="float: right;"><i class="fa fa-download"></i> Unduh Laporan</a> -->
                    </div>

                    <br />

                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-info" role="alert"><i class="fas fa-info"></i> Masukan NIS siswa yang sudah terdaftar untuk melihat pembayaran spp.</div>
                                <?= form_open(''); ?>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nomor Induk Siswa..." name="nomor_induk" autofocus="on">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                                <br />

                                <small class="muted text-danger"><?= form_error('nomor_induk'); ?></small>
                                <?= form_close(); ?>
                            </div>
                        </div>
                    </div>


                    <?php if ($this->input->post('nomor_induk')) : ?>
                        <!-- Biodata Siswa -->
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <h4 class="text-center">Biodata Siswa</h4>
                                <table class="table">
                                    <tr>
                                        <th>Nomor Induk</th>
                                        <td>:</td>
                                        <td><?= $siswa['nomor_induk']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Siswa</th>
                                        <td>:</td>
                                        <td><?= $siswa['nama_siswa']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>:</td>
                                        <td><?= $siswa['kelas']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tahun Ajaran</th>
                                        <td>:</td>
                                        <td><?= $siswa['tahun_ajaran']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /Biodata Siswa -->

                        <!-- DataTables -->
                        <div class="card mb-3">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Tagihan</th>
                                                <th>Bulan</th>
                                                <th>Jatuh Tempo</th>
                                                <th>Tanggal Bayar</th>
                                                <th>Jumlah</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($tagihan as $pb) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>

                                                    <td><?= $pb['nm_tagihan']; ?></td>
                                                    <td><?= $pb['bulan']; ?></td>
                                                    <td><?= $pb['jatuh_tempo']; ?></td>
                                                    <td><?= $pb['tgl_bayar']; ?></td>
                                                    <td>Rp<?= number_format($pb['jml']); ?></td>
                                                    <td><?= $pb['ket']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('pembayaran/bayar/') . $siswa['nomor_induk'] . '/' . $pb['kode_tagihan']; ?>" class="badge badge-success"> Bayar</a>
                                                        <a href="<?= base_url('pembayaran/cetak/') . $siswa['nomor_induk'] . '/' . $pb['kode_tagihan']; ?>" class="badge badge-primary"> Cetak</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->