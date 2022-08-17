<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('daftar', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">

                    <a href="<?php echo site_url('daftar') ?>"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card-body">

                    <?php foreach ($daftar as $daftar) : ?>
                        <form action="<?php base_url("daftar/edit") ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="kd_daftar" value="<?php echo $daftar['kd_daftar'] ?>" />
                            <div class="alert alert-primary">
                                <strong>Data Calon Siswa</strong>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label for="nm_calon_siswa">Nama Calon Siswa</label>
                                        <input class="form-control <?php echo form_error('nm_calon_siswa') ? 'is-invalid' : '' ?>" type="text" name="nm_calon_siswa" min="0" placeholder="Uraian daftar" value="<?php echo $daftar['nm_calon_siswa'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nm_calon_siswa') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input class="form-control <?php echo form_error('umur') ? 'is-invalid' : '' ?>" type="text" name="umur" min="0" placeholder="Uraian daftar" value="<?php echo $daftar['umur'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('umur') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="kelas">Kelas</label>
                                        <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" type="text" name="kelas" min="0" placeholder="Uraian daftar" value="<?php echo $daftar['kelas'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kelas') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid' : '' ?>" type="text" name="tempat_lahir" min="0" placeholder="Uraian daftar" value="<?php echo $daftar['tempat_lahir'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tempat_lahir') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" type="text" name="tgl_lahir" value="<?php echo $daftar['tgl_lahir'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tgl_lahir') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="jkel">Jenis Kelamin:</label>
                                        <select class="form-control <?php echo form_error('jkel') ? 'is-invalid' : '' ?>" type="text" name="jkel" value="<?php echo $daftar['jkel'] ?>">
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
                                        <select class="form-control <?php echo form_error('agama') ? 'is-invalid' : '' ?>" type="text" name="agama" value="<?php echo $daftar['agama'] ?>">
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
                                        <label for="alamat">Alamat</label>
                                        <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" value="<?php echo $daftar['alamat'] ?>" />
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
                                        <label for="nama_ayah">Nama Ayah</label>
                                        <input class="form-control <?php echo form_error('nama_ayah') ? 'is-invalid' : '' ?>" type="text" name="nama_ayah" value="<?php echo $daftar['nama_ayah'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_ayah') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="umur_ayah">Umur Ayah</label>
                                        <input class="form-control <?php echo form_error('umur_ayah') ? 'is-invalid' : '' ?>" type="text" name="umur_ayah" value="<?php echo $daftar['umur_ayah'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('umur_ayah') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="alamat_ayah">Alamat Ayah</label>
                                        <input class="form-control <?php echo form_error('alamat_ayah') ? 'is-invalid' : '' ?>" type="text" name="alamat_ayah" value="<?php echo $daftar['alamat_ayah'] ?>" />
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
                                        <select class="form-control <?php echo form_error('pendidikan_ayah') ? 'is-invalid' : '' ?>" name="pendidikan_ayah" value="<?php echo $daftar['pendidikan_ayah'] ?>">
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
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <input class="form-control <?php echo form_error('pekerjaan_ayah') ? 'is-invalid' : '' ?>" type="text" name="pekerjaan_ayah" value="<?php echo $daftar['pekerjaan_ayah'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('pekerjaan_ayah') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="telepon_ayah">No. Telp Ayah</label>
                                        <input class="form-control <?php echo form_error('telepon_ayah') ? 'is-invalid' : '' ?>" type="text" name="telepon_ayah" value="<?php echo $daftar['telepon_ayah'] ?>" />
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
                                        <label for="nama_ibu">Nama Ibu</label>
                                        <input class="form-control <?php echo form_error('nama_ibu') ? 'is-invalid' : '' ?>" type="text" name="nama_ibu" value="<?php echo $daftar['nama_ibu'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nama_ibu') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="umur_ibu">Umur Ibu</label>
                                        <input class="form-control <?php echo form_error('umur_ibu') ? 'is-invalid' : '' ?>" type="text" name="umur_ibu" value="<?php echo $daftar['umur_ibu'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('umur_ibu') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="alamat_ibu">Alamat Ibu</label>
                                        <input class="form-control <?php echo form_error('alamat_ibu') ? 'is-invalid' : '' ?>" type="text" name="alamat_ibu" value="<?php echo $daftar['alamat_ibu'] ?>" />
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
                                        <select class="form-control <?php echo form_error('pendidikan_ibu') ? 'is-invalid' : '' ?>" name="pendidikan_ibu" value="<?php echo $daftar['pendidikan_ibu'] ?>">
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
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input class="form-control <?php echo form_error('pekerjaan_ibu') ? 'is-invalid' : '' ?>" type="text" name="pekerjaan_ibu" value="<?php echo $daftar['pekerjaan_ibu'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('pekerjaan_ibu') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="telepon_ibu">No. Telp Ibu</label>
                                        <input class="form-control <?php echo form_error('telepon_ibu') ? 'is-invalid' : '' ?>" type="text" name="telepon_ibu" value="<?php echo $daftar['telepon_ibu'] ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('telepon_ibu') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="alert alert-primary">
                                <strong>Data Lain-lain</strong>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="akta_lahir">Akta Lahir:</label>
                                        <input type="file" name="akta_lahir" class="form-control <?php echo form_error('akta_lahir') ? 'is-invalid' : '' ?>" type="file" name="akta_lahir" value="<?php echo $daftar['akta_lahir'] ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('akta_lahir') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="kartu_keluarga">Kartu Keluarga:</label>
                                        <input type="file" name="kartu_keluarga" class="form-control <?php echo form_error('kartu_keluarga') ? 'is-invalid' : '' ?>" type="file" name="kartu_keluarga" value="<?php echo $daftar['kartu_keluarga'] ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('kartu_keluarga') ?>
                                        </div>
                                    </div>
                                </div>

                            </div> -->


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