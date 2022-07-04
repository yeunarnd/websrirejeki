<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan Dispensasi Siswa</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('dispensasi') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">

                        <div>

                            <div class="form-group">
                                <label for="kode_dispensasi">Kode Dispensasi:</label>
                                <b><?php echo $dispensasi->kode_dispensasi ?></b>
                            </div>

                            <div class="form-group">
                                <label for="no_induk">Nomor Induk:</label>
                                <b><?php echo $dispensasi->no_induk ?></b>
                            </div>

                            <div class="form-group">
                                <label for="nama_dispensasi">Nama Dispensasi:</label>
                                <b><?php echo $dispensasi->nama_dispensasi ?></b>
                            </div>

                            <div class="form-group">
                                <label for="alasan_pengajuan">Alasan Pengajuan:</label>
                                <b><?php echo $dispensasi->alasan_pengajuan ?></b>
                            </div>

                            <div class="form-group">
                                <label for="tgl_pengajuan_bayar">Tanggal Pengajuan Bayar:</label>
                                <b><?php echo $dispensasi->tgl_pengajuan_bayar ?></b>
                            </div>

                            <a href="<?= base_url('dispensasi/validasi/1/' . $dispensasi->kode_dispensasi); ?>" class="btn btn-secondary">Validasi</a>
                            <a href="<?= base_url('dispensasi/validasi/2/' . $dispensasi->kode_dispensasi); ?>" class="btn btn-secondary">Tolak</a>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->