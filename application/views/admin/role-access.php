<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 btn btn-primary btn-lg">Role : <?= $role['role']; ?></h1>

    <div class="row">
        <div class="col-lg">

            <?= $this->session->flashdata('message'); ?>



            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/role') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Access</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $m['menu']; ?></td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->