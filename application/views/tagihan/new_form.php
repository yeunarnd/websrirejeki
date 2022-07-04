<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('tagihan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('tagihan') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <form class="user" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kode_tagihan">Kode Tagihan</label>
                            <input class="form-control <?php echo form_error('kode_tagihan') ? 'is-invalid' : '' ?>" type="text" name="kode_tagihan" />
                            <div class="invalid-feedback">
                                <?php echo form_error('kode_tagihan') ?>
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
                            <label for="nama_tagihan">Nama Tagihan</label>
                            <input class="form-control <?php echo form_error('nama_tagihan') ? 'is-invalid' : '' ?>" type="text" name="nama_tagihan" />
                            <div class="invalid-feedback">
                                <?php echo form_error('nama_tagihan') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_tagihan">Jumlah Tagihan</label>
                            <input class="form-control <?php echo form_error('jumlah_tagihan') ? 'is-invalid' : '' ?>" type="text" name="jumlah_tagihan" />
                            <div class="invalid-feedback">
                                <?php echo form_error('jumlah_tagihan') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_jatuh_tempo">Tanggal Jatuh Tempo</label>
                            <input class="form-control <?php echo form_error('tgl_jatuh_tempo') ? 'is-invalid' : '' ?>" type="date" name="tgl_jatuh_tempo" />
                            <div class="invalid-feedback">
                                <?php echo form_error('tgl_jatuh_tempo') ?>
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