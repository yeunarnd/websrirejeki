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

                            <a href="<?= base_url('dispensasi/validasi/1/' . $dispensasi->id); ?>" class="btn btn-secondary">Validasi</a>
                            <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#tolakValidasiModal">Tolak</a>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Modal -->
            <div class="modal fade" id="tolakValidasiModal" tabindex="-1" aria-labelledby="tolakValidasiModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tolakValidasiModalLabel">Detail Rekap Pendaftaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php base_url('dispensasi/tolak_dispen') ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="alasan_ditolak">Alasan ditolak:</label>
                                    <textarea class="form-control <?php echo form_error('alasan_ditolak') ? 'is-invalid' : '' ?>" name="alasan_ditolak" rows="2" id="alasan_ditolak"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="<?= base_url('dispensasi/validasi/2/' . $dispensasi->kode_dispensasi); ?>" class="btn btn-secondary">Simpan</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>