<title>PAUD Sri Rejeki - Rekap Pendaftaran</title>
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

            <!-- <li class="nav-item">
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
            </li> -->

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
                        <h1 class="h3 mb-0 text-gray-800">Rekap Pendaftaran</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div id="content-wrapper">

                            <div class="container-fluid">

                                <!-- DataTables -->
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <a href="<?php echo site_url('daftar/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                                        <a class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                                            <select class=" select2" name="periode">
                                                <option>Periode 2020/2021</option>
                                                <option value="eyJ0YWh1biI6IjIwMjAiLCJzZW1lc3RlciI6IkdlbmFwIn0=">2020 Genap</option>
                                                <option value="eyJ0YWh1biI6IjIwMjAiLCJzZW1lc3RlciI6IkdhbmppbCJ9">2020 Ganjil</option>
                                                <option value="eyJ0YWh1biI6IjIwMTkiLCJzZW1lc3RlciI6IkdlbmFwIn0=">2019 Genap</option>
                                                <option value="eyJ0YWh1biI6IjIwMTkiLCJzZW1lc3RlciI6IkdhbmppbCJ9">2019 Ganjil</option>
                                                <option value="eyJ0YWh1biI6IjIwMTgiLCJzZW1lc3RlciI6IkdlbmFwIn0=">2018 Genap</option>
                                                <option value="eyJ0YWh1biI6IjIwMTgiLCJzZW1lc3RlciI6IkdhbmppbCJ9">2018 Ganjil</option>
                                            </select>
                                        </a>
                                        <a href="" class="btn btn-secondary" style="float:right"> Unduh Laporan</a>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Daftar</th>
                                                        <th>Tanggal Daftar</th>
                                                        <th>Nama Calon Siswa</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($daftar as $daftar) : ?>
                                                        <tr>
                                                            <td width="150">
                                                                <?php echo $daftar->kd_daftar ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $daftar->tgl_daftar ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $daftar->nm_calon_siswa ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($daftar->status == 1) {
                                                                    echo 'Tervalidasi';
                                                                } else if ($daftar->status == 2) {
                                                                    echo 'Ditolak';
                                                                } else {
                                                                    echo 'Menunggu validasi';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td width="250">
                                                                <a href="<?php echo site_url('daftar/details/' . $daftar->kd_daftar) ?>" class="btn btn-info btn-sm"> Detail</a>
                                                                <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('daftar/delete/' . $daftar->kd_daftar) ?>" class="btn btn-danger btn-sm">Hapus</a>
                                                            </td>
                                                            <!-- <td width="250">
                                                                <a href="<?php echo site_url('daftar/edit/' . $daftar->kd_daftar) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                                                <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('daftar/delete/' . $daftar->kd_daftar) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                            </td> -->
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
                            <!-- <div class="row">

                                <div class="col-lg-6 mb-4">

                                </div>
                            </div> -->

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("templates/footer.php") ?>