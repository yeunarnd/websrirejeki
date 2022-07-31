<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('keuangan'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">POS PAUD</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class=" nav-link" href="<?= base_url('keuangan'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Siswa
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('keuangan/lihat'); ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Daftar Siswa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Keuangan
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('keuangan/tagihan'); ?>">
            <i class="fas fa-fw fa-file-invoice"></i>
            <span>Tagihan Siswa</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('keuangan/dispensasi'); ?>">
            <i class="fas fa-fw fa-clock"></i>
            <span>Pengajuan Dispensasi</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('keuangan/jenis_bayar'); ?>">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Jenis Pembayaran</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('keuangan/pembayaran'); ?>">
            <i class="fas fa-fw fa-money-bill-alt"></i>
            <span>Pembayaran</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<?php $this->load->view('templates/topbar') ?>

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

                    <a href="<?php echo site_url('keuangan/tagihan') ?>"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card-body">

                    <?php foreach ($tagihan as $t) : ?>
                        <form action="<?php base_url("keuangan/edit_tagihan") ?>" method="post" enctype="multipart/form-data">

                            <!-- <input type="hidden" name="kode_tagihan" value="<?php echo $t['kode_tagihan'] ?>" /> -->

                            <div class="form-group">
                                <label for="kode_tagihan">Kode Tagihan</label>
                                <input class="form-control <?php echo form_error('kode_tagihan') ? 'is-invalid' : '' ?>" type="text" name="kode_tagihan" value="<?php echo $t['kode_tagihan'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('kode_tagihan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>" type="text" name="nama_siswa" value="<?php echo $t['nama_siswa'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_siswa') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama_tagihan">Nama Tagihan</label>
                                <input class="form-control <?php echo form_error('nama_tagihan') ? 'is-invalid' : '' ?>" type="text" name="nama_tagihan" value="<?php echo $t['nama_tagihan'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_tagihan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumlah_tagihan">Jumlah Tagihan</label>
                                <input class="form-control <?php echo form_error('jumlah_tagihan') ? 'is-invalid' : '' ?>" type="text" name="jumlah_tagihan" value="<?php echo $t['jumlah_tagihan'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jumlah_tagihan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tgl_jatuh_tempo">Tanggal Jatuh Tempo</label>
                                <input class="form-control <?php echo form_error('tgl_jatuh_tempo') ? 'is-invalid' : '' ?>" type="date" name="tgl_jatuh_tempo" value="<?php echo $t['tgl_jatuh_tempo'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_jatuh_tempo') ?>
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