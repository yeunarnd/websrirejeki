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

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">

                    <a href="<?php echo site_url('dispensasi') ?>"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card-body">

                    <?php foreach ($dispensasi as $d) : ?>
                        <form action="<?php base_url("tagihan/edit") ?>" method="post" enctype="multipart/form-data">

                            <!-- <input type="hidden" name="kode_tagihan" value="<?php echo $d['kode_tagihan'] ?>" /> -->

                            <div class="form-group">
                                <label for="no_induk">No. Induk Siswa</label>
                                <input class="form-control <?php echo form_error('no_induk') ? 'is-invalid' : '' ?>" type="text" name="no_induk" value="<?php echo $d['no_induk'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_induk') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_dispensasi">Nama Dispensasi</label>
                                <input class="form-control <?php echo form_error('nama_dispensasi') ? 'is-invalid' : '' ?>" type="text" name="nama_dispensasi" value="<?php echo $d['nama_dispensasi'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_dispensasi') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alasan_pengajuan">Alasan Pengajuan</label>
                                <input class="form-control <?php echo form_error('alasan_pengajuan') ? 'is-invalid' : '' ?>" type="text" name="alasan_pengajuan" value="<?php echo $d['alasan_pengajuan'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alasan_pengajuan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tgl_pengajuan_bayar">Tanggal Pengajuan Bayar</label>
                                <input class="form-control <?php echo form_error('tgl_pengajuan_bayar') ? 'is-invalid' : '' ?>" type="date" name="tgl_pengajuan_bayar" value="<?php echo $d['tgl_pengajuan_bayar'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_pengajuan_bayar') ?>
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