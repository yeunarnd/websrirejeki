<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('menu') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">

                    <form class="user" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="menu">Nama Menu</label>
                            <input class="form-control <?php echo form_error('menu') ? 'is-invalid' : '' ?>" type="text" name="menu" />
                            <div class="invalid-feedback">
                                <?php echo form_error('menu') ?>
                            </div>
                        </div>

                        <input class="btn btn-dark" type="submit" name="btn" value="Simpan" />
                    </form>

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