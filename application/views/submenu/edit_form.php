<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('submenu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <!-- Card  -->
            <div class="card mb-3">
                <div class="card-header">

                    <a href="<?php echo site_url('submenu') ?>"><i class="fas fa-arrow-left"></i>
                        Kembali</a>
                </div>
                <div class="card-body">

                    <?php foreach ($submenu as $sm) : ?>
                        <form action="<?php base_url("submenu/edit") ?>" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $sm['id'] ?>" />

                            <div class="form-group">
                                <label for="menu_id">ID Menu</label>
                                <input class="form-control <?php echo form_error('menu_id') ? 'is-invalid' : '' ?>" type="text" name="menu_id" placeholder="no. induk" value="<?php echo $sm['menu_id'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('menu_id') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input class="form-control <?php echo form_error('title') ? 'is-invalid' : '' ?>" type="text" name="title" placeholder="no. induk" value="<?php echo $sm['title'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('title') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="url">URL</label>
                                <input class="form-control <?php echo form_error('url') ? 'is-invalid' : '' ?>" type="text" name="url" placeholder="no. induk" value="<?php echo $sm['url'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('url') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input class="form-control <?php echo form_error('icon') ? 'is-invalid' : '' ?>" type="text" name="icon" placeholder="no. induk" value="<?php echo $sm['icon'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('icon') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_active">Keaktifan</label>
                                <input class="form-control <?php echo form_error('is_active') ? 'is-invalid' : '' ?>" type="text" name="is_active" placeholder="no. induk" value="<?php echo $sm['is_active'] ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('is_active') ?>
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