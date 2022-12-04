<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('siswa', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">

                    <a href="<?php echo site_url('siswa') ?>"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card-body">

                    <?php foreach ($siswa as $s) : ?>
                        <form action="<?php base_url("siswa/edit") ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="nomor_induk" value="<?php echo $s['nomor_induk'] ?>" />

                            <div class="form-group">
                                <label for="nama_siswa">Nama Lengkap Siswa</label>
                                <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>" type="text" name="nama_siswa" placeholder="nama lengkap" value="<?php echo $s['nama_siswa'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_siswa') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jkel">Jenis Kelamin</label>
                                <input class="form-control <?php echo form_error('jkel') ? 'is-invalid' : '' ?>" type="text" name="jkel" placeholder="jenis kelamin" value="<?php echo $s['jkel'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jkel') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="alamat lengkap" value="<?php echo $s['alamat'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kelas">Kelompok Kelas</label>
                                <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" type="text" name="kelas" placeholder="kelompok kelas" value="<?php echo $s['kelas'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('kelas') ?>
                                </div>
                            </div>

                            <input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
                        </form>
                    <?php endforeach; ?>

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