<title>PAUD Sri Rejeki - Daftar Tagihan</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Tagihan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div id="content-wrapper">

                            <div class="container-fluid">

                                <!-- DataTables -->
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <a href="<?php echo site_url('tagihan/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                                    </div>
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Tagihan</th>
                                                        <th>Nama Siswa</th>
                                                        <th>Nama Tagihan</th>
                                                        <th>Jumlah Tagihan</th>
                                                        <th>Tanggal Tempo</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tagihan as $tagihan) : ?>
                                                        <tr>
                                                            <td width="150">
                                                                <?php echo $tagihan->kode_tagihan ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $tagihan->nama_siswa ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $tagihan->nama_tagihan ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $tagihan->jumlah_tagihan ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $tagihan->tgl_jatuh_tempo ?>
                                                            </td>
                                                            <td width="250">
                                                                <a href="<?php echo site_url('tagihan/edit/' . $tagihan->kode_tagihan) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                                                <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('tagihan/delete/' . $tagihan->kode_tagihan) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
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