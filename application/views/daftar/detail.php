<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pendaftaran Siswa</h1>
    </div>

    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "paudsrirejeki");
    $auto = mysqli_query($koneksi, "SELECT max(kd_daftar) as max_code FROM daftar");
    $data = mysqli_fetch_array($auto);
    $code = $data['max_code'];
    $urutan = (int)substr($code, 1, 3);
    $urutan++;
    $huruf = "PD";
    $kd_daf = $huruf . sprintf("%03s", $urutan);
    ?>

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

                        <div>
                            <div class="alert alert-primary">
                                <strong>Data Calon Siswa</strong>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="nm_calon_siswa">Nama Lengkap:</label>
                                        <b><?php echo $daftar->nm_calon_siswa ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="umur">Usia:</label>
                                        <b><?php echo $daftar->umur ?> Tahun</b>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="kelas">Kelas:</label>
                                        <b><?php echo $daftar->kelas ?></b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir:</label>
                                        <b><?php echo $daftar->tempat_lahir ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir:</label>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tgl_lahir') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="jkel">Jenis Kelamin:</label>
                                        <b><?php echo $daftar->jkel ?></b>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="agama">Agama:</label>
                                        <b><?php echo $daftar->agama ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="alamat">Alamat Tinggal:</label>
                                        <b><?php echo $daftar->alamat ?></b>
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
                                        <b><?php echo $daftar->nama_ayah ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="umur_ayah">Umur Ayah:</label>
                                        <b><?php echo $daftar->umur_ayah ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="alamat_ayah">Alamat Ayah:</label>
                                        <b><?php echo $daftar->alamat_ayah ?></b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pendidikan_ayah">Pendidikan Ayah:</label>
                                        <b><?php echo $daftar->pendidikan_ayah ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
                                        <b><?php echo $daftar->pekerjaan_ayah ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="telepon_ayah">No. Telp Ayah:</label>
                                        <b><?php echo $daftar->telepon_ayah ?></b>
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
                                        <b><?php echo $daftar->nama_ibu ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="umur_ibu">Umur Ibu:</label>
                                        <b><?php echo $daftar->umur_ibu ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="alamat_ibu">Alamat Ibu:</label>
                                        <b><?php echo $daftar->alamat_ibu ?></b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pendidikan_ibu">Pendidikan Ibu:</label>
                                        <b><?php echo $daftar->pendidikan_ibu ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
                                        <b><?php echo $daftar->pekerjaan_ibu ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="telepon_ibu">No. Telp Ibu:</label>
                                        <b><?php echo $daftar->telepon_ibu ?></b>
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
                                        <b><?php echo $daftar->akta_lahir ?></b>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="kartu_keluarga">Kartu Keluarga:</label>
                                        <b><?php echo $daftar->kartu_keluarga ?></b>
                                    </div>
                                </div>

                            </div>
                            <a href="<?= base_url('daftar/validasi/1/' . $daftar->kd_daftar); ?>" class="btn btn-secondary">Validasi</a>
                            <a href="<?= base_url('daftar/validasi/2/' . $daftar->kd_daftar); ?>" class="btn btn-secondary">Tolak</a>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->