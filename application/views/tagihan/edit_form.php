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

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">

                    <a href="<?php echo site_url('tagihan') ?>"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card-body">

                    <?php foreach ($tagihan as $t) : ?>
                        <form action="<?php base_url("tagihan/edit") ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="kode_tagihan" value="<?php echo $t['kode_tagihan'] ?>" />

                            <div class="form-group">
                                <label for="nomor_induk">Nomor Induk Siswa</label>
                                <input class="form-control <?php echo form_error('nomor_induk') ? 'is-invalid' : '' ?>" type="text" name="nomor_induk" value="<?php echo $t['nomor_induk'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nomor_induk') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nm_tagihan">Nama Tagihan</label>
                                <input class="form-control <?php echo form_error('nm_tagihan') ? 'is-invalid' : '' ?>" type="text" name="nm_tagihan" value="<?php echo $t['nm_tagihan'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nm_tagihan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jatuh_tempo">Tanggal Jatuh Tempo</label>
                                <input class="form-control <?php echo form_error('jatuh_tempo') ? 'is-invalid' : '' ?>" type="date" name="jatuh_tempo" value="<?php echo $t['jatuh_tempo'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jatuh_tempo') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bulan">Bulan</label>
                                <input class="form-control <?php echo form_error('bulan') ? 'is-invalid' : '' ?>" type="text" name="bulan" value="<?php echo $t['bulan'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('bulan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jml">Jumlah Tagihan</label>
                                <input class="form-control <?php echo form_error('jml') ? 'is-invalid' : '' ?>" type="text" name="jml" value="<?php echo $t['jml'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jml') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="ket">Keterangan</label>
                                <input class="form-control <?php echo form_error('ket') ? 'is-invalid' : '' ?>" type="text" name="ket" value="<?php echo $t['ket'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('ket') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="id_user">Masukkan ID User</label>
                                <input class="form-control <?php echo form_error('id_user') ? 'is-invalid' : '' ?>" type="text" name="id_user" value="<?php echo $t['id_user'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_user') ?>
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