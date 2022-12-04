<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('siswa', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('siswa') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <form class="user" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="kd_daftar">Kode Pendaftaran</label>
                            <select class="form-control <?php echo form_error('kd_daftar') ? 'is-invalid' : '' ?>" name="kd_daftar" id="kd_daftar" onchange="pilih_kode()">
                                <option value="">Pilih Pendaftaran</option>
                                <?php
                                $list = $this->db->query("SELECT * FROM daftar");
                                foreach ($list->result() as $t) {
                                ?>
                                    <option value="<?php echo $t->kd_daftar ?>"><?php echo $t->kd_daftar ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nomor_induk">Nomor Induk siswa</label>
                            <input class="form-control <?php echo form_error('nomor_induk') ? 'is-invalid' : '' ?>" type="text" name="nomor_induk" />
                            <div class="invalid-feedback">
                                <?php echo form_error('nomor_induk') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input class="form-control" type="text" name="nama_siswa" id="nama_siswa" placeholder="nama" />
                            <div class="invalid-feedback">
                                <?php echo form_error('nama_siswa') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input class="form-control <?php echo form_error('jkel') ? 'is-invalid' : '' ?>" type="text" name="jkel" id="jkel" placeholder="jenis kelamin" />
                            <div class="invalid-feedback">
                                <?php echo form_error('jkel') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" id="alamat" placeholder="alamat" />
                            <div class="invalid-feedback">
                                <?php echo form_error('alamat') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kelompok_kelas">Kelompok Kelas</label>
                            <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" type="text" name="kelas" id="kelas" placeholder="masukkan kelompok_kelas" />
                            <div class="invalid-feedback">
                                <?php echo form_error('kelas') ?>
                            </div>
                        </div>

                        <input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
                    </form>

                    <!-- <datalist id="data_siswa">
                        <?php
                        // foreach ($record->result() as $b) {
                        // echo "<option value='$b->kd_daftar'>$b->nm_calon_siswa</option>";
                        // }
                        // 
                        ?>

                    </datalist> -->

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