<title>PAUD Sri Rejeki - Dispensasi</title>
<?php $this->load->view("templates/header.php") ?>
<link href="<?= base_url('front-end/assets/img/logo-paud.png'); ?>" rel="icon">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('akses') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="sidebar-brand-text mx-3">POS PAUD</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('akses') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('daftar') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pendaftaran</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('siswa') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('tagihan') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Tagihan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('dispensasi') ?>">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>Pengajuan Dispensasi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('jenisbayar') ?>">
                    <i class="fas fa-fw fa-money-bill-alt"></i>
                    <span>Jenis Pembayaran</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pembayaran') ?>">
                    <i class="fas fa-fw fa-money-bill-alt"></i>
                    <span>Pembayaran</span>
                </a>
            </li>
           <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $this->load->view("templates/topbar.php") ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pengajuan Dispensasi</h1>
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

                                        <form action="<?php base_url('dispensasi/add') ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="kode_dispensasi">Kode Dispensasi</label>
                                                <input class="form-control <?php echo form_error('kode_dispensasi') ? 'is-invalid' : '' ?>" type="text" name="kode_dispensasi" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('kode_dispensasi') ?>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="agama">No. Induk</label>
                                                        <select class="form-control <?php echo form_error('no_induk') ? 'is-invalid' : '' ?>" name="no_induk">
                                                            <option>Pilih</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Budha">Budha</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="alamat">Nama Siswa</label>
                                                        <textarea class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>" name="nama_siswa" rows="2" id="nama_siswa"></textarea>
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('nama_siswa') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama_siswa">Nama Dispensasi</label>
                                                <input class="form-control <?php echo form_error('nama_dispensasi') ? 'is-invalid' : '' ?>" type="text" name="nama_dispensasi" />
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('nama_dispensasi') ?>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="jenis_kelamin">Alasan Pengajuan</label>
                                                <input class="form-control <?php echo form_error('alasan_pengajuan') ? 'is-invalid' : '' ?>" name="alasan_pengajuan" />
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

                                            <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                                        </form>

                                    </div>

                                    <div class="card-footer small text-muted">
                                        *Wajib diisi
                                    </div>


                                </div>

                            </div>
                            <!-- /.container-fluid -->

                            <!-- Content Row -->
                            <div class="row">

                                <div class="col-lg-6 mb-4">

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("templates/footer.php") ?>