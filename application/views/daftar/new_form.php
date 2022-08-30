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

                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="tgl_daftar" class="col-form-label">Tanggal Daftar:</label>
                                    <input class="form-control <?php echo form_error('tgl_daftarx') ? 'is-invalid' : '' ?>" name="tgl_daftarx" id="disabledInput" type="text" placeholder="<?php echo format_indo(date('Y-m-d')); ?>" disabled>
                                    <input class="form-control <?php echo form_error('tgl_daftar') ? 'is-invalid' : '' ?>" style="display:none" name="tgl_daftar" id="disabledInput" type="text" value="<?php echo date('Y-m-d'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_daftar') ?>
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
                                        <input type="date" name="tgl_lahir" class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>">
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
                                        <label for="alamat_ayah">Alamat Ayah:</label>
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
                                        <label for="pendidikan_ayah">Pendidikan Ayah:</label>
                                        <select class="form-control <?php echo form_error('pendidikan_ayah') ? 'is-invalid' : '' ?>" name="pendidikan_ayah">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                            <option value="DIPLOMA">DIPLOMA</option>
                                            <option value="SARJANA">SARJANA</option>
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
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
                                        <label for="telepon_ayah">No. Telp Ayah:</label>
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
                                        <label for="alamat_ibu">Alamat Ibu:</label>
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
                                        <label for="pendidikan_ibu">Pendidikan Ibu:</label>
                                        <select class="form-control <?php echo form_error('pendidikan_ibu') ? 'is-invalid' : '' ?>" name="pendidikan_ibu">
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMK">SMK</option>
                                            <option value="DIPLOMA">DIPLOMA</option>
                                            <option value="SARJANA">SARJANA</option>
                                            <option value="Tidak Sekolah">Tidak Sekolah</option>
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
                                        <label for="telepon_ibu">No. Telp Ibu:</label>
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