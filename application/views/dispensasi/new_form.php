<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('dispensasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

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

                    <form class="user" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kode_dispensasi">Kode Dispensasi</label>
                            <input class="form-control <?php echo form_error('kode_dispensasi') ? 'is-invalid' : '' ?>" type="text" name="kode_dispensasi" />
                            <div class="invalid-feedback">
                                <?php echo form_error('kode_dispensasi') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_induk">No. Induk Siswa</label>
                            <input class="form-control <?php echo form_error('no_induk') ? 'is-invalid' : '' ?>" type="text" name="no_induk" />
                            <div class="invalid-feedback">
                                <?php echo form_error('no_induk') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_dispensasi">Nama Dispensasi</label>
                            <input class="form-control <?php echo form_error('nama_dispensasi') ? 'is-invalid' : '' ?>" type="text" name="nama_dispensasi" />
                            <div class="invalid-feedback">
                                <?php echo form_error('nama_dispensasi') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alasan_pengajuan">Alasan Pengajuan</label>
                            <input class="form-control <?php echo form_error('alasan_pengajuan') ? 'is-invalid' : '' ?>" type="text" name="alasan_pengajuan" />
                            <div class="invalid-feedback">
                                <?php echo form_error('alasan_pengajuan') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pengajuan_bayar">Tanggal Pengajuan Bayar</label>
                            <input class="form-control <?php echo form_error('tgl_pengajuan_bayar') ? 'is-invalid' : '' ?>" type="date" name="tgl_pengajuan_bayar" />
                            <div class="invalid-feedback">
                                <?php echo form_error('tgl_pengajuan_bayar') ?>
                            </div>
                        </div>

                        <input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
                    </form>

                </div>

                <div class="card-footer small text-muted">
                    *Wajib diisi
                </div>


            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->