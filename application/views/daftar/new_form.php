<title>PAUD Sri Rejeki - Pendaftaran Siswa</title>
<?php $this->load->view("templates/header.php") ?>
<link href="<?= base_url('front-end/assets/img/logo-paud.png'); ?>" rel="icon">
<link href="<?= base_url('front-end/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('front-end/assets/vendor/icofont/icofont.min.css'); ?>" rel="stylesheet">
<link href="<?= base_url('front-end/assets/css/style.css'); ?>" rel="stylesheet">

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

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('pengaturan') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
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
                        <h1 class="h3 mb-0 text-gray-800">Pendaftaran Siswa</h1>
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
                                        <a href="<?php echo site_url('daftar') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                                    </div>
                                    <div class="card-body">

                                        <form action="<?php base_url('daftar/add') ?>" method="post" enctype="multipart/form-data">
                                            <!-- <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="tgl_daftar" class="col-form-label">Tanggal Daftar:</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo date('l, d-m-Y'); ?>" disabled>
                                                </div>
                                            </div> -->
                                            <div class="row g-3 align-items-center">
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="kd_daftar" class="col-form-label">Kode Pendaftaran:</label>
                                                        <input class="form-control" id="disabledInput" type="text" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="tgl_daftar" class="col-form-label">Tanggal Daftar:</label>
                                                        <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo date('l, d-m-Y'); ?>" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-primary">
                                                <strong>Data Calon Siswa</strong>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <label for="nm_calon_siswa">Nama Lengkap:</label>
                                                        <input type="text" name="nm_calon_siswa" class="form-control <?php echo form_error('nm_calon_siswa') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('nm_calon_siswa') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="umur">Usia:</label>
                                                        <input type="text" name="umur" class="form-control <?php echo form_error('umur') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('umur') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="kelas">Kelas:</label>
                                                        <input type="text" name="kelas" class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('kelas') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir:</label>
                                                        <input type="text" name="tempat_lahir" class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('tempat_lahir') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="tgl_lahir">Tanggal Lahir:</label>
                                                        <input type="date" name="tanggal_lahir" class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('tgl_lahir') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label for="jkel">Jenis Kelamin:</label>
                                                        <select class="form-control <?php echo form_error('jkel') ? 'is-invalid' : '' ?>" name="jkel">
                                                            <option>Pilih</option>
                                                            <option value="1">Laki-laki</option>
                                                            <option value="2">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="agama">Agama:</label>
                                                        <select class="form-control <?php echo form_error('agama') ? 'is-invalid' : '' ?>" name="agama">
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
                                                        <label for="alamat">Alamat Tinggal:</label>
                                                        <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" rows="2" id="alamat"></textarea>
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('alamat') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            </div>
                                            <div class="alert alert-primary">
                                                <strong>Data Ayah</strong>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nama_ayah">Nama Ayah:</label>
                                                        <input type="text" name="nama_ayah" class="form-control <?php echo form_error('nama_ayah') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('nama_ayah') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="umur_ayah">Umur Ayah:</label>
                                                        <input type="text" name="umur_ayah" class="form-control <?php echo form_error('umur_ayah') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('umur_ayah') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="alamat_ayah">Alamat Tinggal:</label>
                                                        <textarea class="form-control <?php echo form_error('alamat_ayah') ? 'is-invalid' : '' ?>" name="alamat_ayah" rows="2" id="alamat"></textarea>
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('alamat_ayah') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="pendidikan_ayah">Pendidikan Terakhir:</label>
                                                        <select class="form-control <?php echo form_error('pendidikan_ayah') ? 'is-invalid' : '' ?>" name="pendidikan_ayah">
                                                            <option value="sd">SD</option>
                                                            <option value="smp">SMP</option>
                                                            <option value="sma_smk">SMA/SMK</option>
                                                            <option value="diploma">DIPLOMA</option>
                                                            <option value="sarjana">SARJANA</option>
                                                            <option value="tidak_sekolah">Tidak Sekolah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                                                        <input type="text" name="pekerjaan_ayah" class="form-control <?php echo form_error('pekerjaan_ayah') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('pekerjaan_ayah') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="telepon_ayah">No. Telepon:</label>
                                                        <input type="text" name="telepon_ayah" class="form-control <?php echo form_error('telepon_ayah') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('telepon_ayah') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="alert alert-primary">
                                                <strong>Data Ibu</strong>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="nama_ibu">Nama Ibu:</label>
                                                        <input type="text" name="nama_ibu" class="form-control <?php echo form_error('nama_ibu') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('nama_ibu') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label for="umur_ibu">Umur Ibu:</label>
                                                        <input type="text" name="umur_ibu" class="form-control <?php echo form_error('umur_ibu') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('umur_ibu') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="alamat_ibu">Alamat Tinggal:</label>
                                                        <textarea class="form-control <?php echo form_error('alamat_ibu') ? 'is-invalid' : '' ?>" name="alamat_ibu" rows="2" id="alamat"></textarea>
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('alamat_ibu') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="pendidikan_ibu">Pendidikan Terakhir:</label>
                                                        <select class="form-control <?php echo form_error('pendidikan_ibu') ? 'is-invalid' : '' ?>" name="pendidikan_ibu">
                                                            <option value="SMA-IPA">SD</option>
                                                            <option value="SMA-IPS">SMP</option>
                                                            <option value="SMK-IPA">SMA/SMK</option>
                                                            <option value="SMK-IPS">DIPLOMA</option>
                                                            <option value="SMK-IPS">SARJANA</option>
                                                            <option value="SMK-IPS">Tidak Sekolah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                                                        <input type="text" name="pekerjaan_ibu" class="form-control <?php echo form_error('pekerjaan_ibu') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('pekerjaan_ibu') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="telepon_ibu">No. Telepon:</label>
                                                        <input type="text" name="telepon_ibu" class="form-control <?php echo form_error('telepon_ibu') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('telepon_ibu') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="alert alert-primary">
                                                <strong>Data Lain-lain</strong>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="akta_lahir">Akta Lahir:</label>
                                                        <input type="file" name="akta_lahir" class="form-control <?php echo form_error('akta_lahir') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('akta_lahir') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="kartu_keluarga">Kartu Keluarga:</label>
                                                        <input type="file" name="kartu_keluarga" class="form-control <?php echo form_error('kartu_keluarga') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('kartu_keluarga') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="foto_siswa">Foto Siswa:</label>
                                                        <input type="file" name="foto_siswa" class="form-control <?php echo form_error('foto_siswa') ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('foto_siswa') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
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