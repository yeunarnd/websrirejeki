<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('pembayaran', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('pembayaran') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <form class="user" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kode_pembayaran">Kode Pembayaran</label>
                            <input class="form-control <?php echo form_error('kode_pembayaran') ? 'is-invalid' : '' ?>" type="text" name="kode_pembayaran" />
                            <div class="invalid-feedback">
                                <?php echo form_error('kode_pembayaran') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>" type="text" name="nama_siswa" />
                            <div class="invalid-feedback">
                                <?php echo form_error('nama_siswa') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_bayar">Jenis Bayar</label>
                            <input class="form-control <?php echo form_error('jenis_bayar') ? 'is-invalid' : '' ?>" type="text" name="jenis_bayar" />
                            <div class="invalid-feedback">
                                <?php echo form_error('jenis_bayar') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pembayaran">Tanggal Pembayaran</label>
                            <input class="form-control <?php echo form_error('tgl_pembayaran') ? 'is-invalid' : '' ?>" type="date" name="tgl_pembayaran" />
                            <div class="invalid-feedback">
                                <?php echo form_error('tgl_pembayaran') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_bayar">Jumlah Pembayaran</label>
                            <input class="form-control <?php echo form_error('jumlah_bayar') ? 'is-invalid' : '' ?>" type="text" name="jumlah_bayar" />
                            <div class="invalid-feedback">
                                <?php echo form_error('jumlah_bayar') ?>
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